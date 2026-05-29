<?php

declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$file = __DIR__ . '/../cms' . $path;

if ($path !== '/' && is_file($file)) {
    return false;
}

if ($path !== '/') {
    $_GET['page'] = trim($path, '/');
}

require __DIR__ . '/../cms/index.php';
