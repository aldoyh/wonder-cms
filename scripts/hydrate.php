<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$site = require $root . '/content/site.php';
$databasePath = $root . '/cms/data/database.js';

if (! is_dir(dirname($databasePath)) && ! mkdir(dirname($databasePath), 0755, true) && ! is_dir(dirname($databasePath))) {
    fwrite(STDERR, "Unable to create cms/data.\n");
    exit(1);
}

$database = [
    'config' => array_merge($site['config'], ['menuItems' => buildMenuItems($site['menuItems'])]),
    'pages' => buildPages($site['pages'], $root, $site['generated_at'] ?? gmdate(DATE_ATOM)),
    'blocks' => $site['blocks'],
];

$json = json_encode($database, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

if ($json === false) {
    fwrite(STDERR, 'Unable to encode database: ' . json_last_error_msg() . "\n");
    exit(1);
}

file_put_contents($databasePath, $json . PHP_EOL);

echo "Hydrated {$databasePath}\n";

/**
 * @param array<int, array<string, mixed>> $items
 * @return array<string, array<string, mixed>>
 */
function buildMenuItems(array $items): array
{
    $menu = [];

    foreach ($items as $index => $item) {
        $menu[(string) $index] = [
            'name' => $item['name'],
            'slug' => $item['slug'],
            'visibility' => $item['visibility'] ?? 'show',
            'subpages' => buildMenuItems($item['subpages'] ?? []),
        ];
    }

    return $menu;
}

/**
 * @param array<string, array<string, mixed>> $items
 * @return array<string, array<string, mixed>>
 */
function buildPages(array $items, string $root, string $timestamp): array
{
    $pages = [];

    foreach ($items as $slug => $page) {
        $content = $page['content'] ?? '';

        if (isset($page['contentFile'])) {
            $contentPath = $root . '/' . $page['contentFile'];

            if (! is_file($contentPath)) {
                fwrite(STDERR, "Missing content file: {$page['contentFile']}\n");
                exit(1);
            }

            $content = trim((string) file_get_contents($contentPath));
        }

        $pages[$slug] = [
            'created' => $timestamp,
            'modified' => $timestamp,
            'visibility' => $page['visibility'] ?? 'show',
            'title' => $page['title'],
            'keywords' => $page['keywords'] ?? '',
            'description' => $page['description'] ?? '',
            'content' => $content,
            'subpages' => buildPages($page['subpages'] ?? [], $root, $timestamp),
        ];
    }

    return $pages;
}
