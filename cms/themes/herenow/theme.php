<?php
global $Wcms;

$pageTree = $Wcms->currentPageTree;
$section = $pageTree[0] ?? 'en';
$language = $section === 'ar' ? 'ar' : 'en';
$direction = $language === 'ar' ? 'rtl' : 'ltr';
$currentPath = trim(implode('/', $pageTree), '/');
$alternatePath = match ($currentPath) {
    'ar' => 'en',
    'ar/about' => 'en/about',
    'ar/contact' => 'en/contact',
    'en' => 'ar',
    'en/about' => 'ar/about',
    'en/contact' => 'ar/contact',
    default => 'ar',
};
?>
<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>">
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
        <meta property="og:url" content="<?= $Wcms->url($currentPath) ?>">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>">
        <meta property="og:title" content="<?= $Wcms->page('title') ?>">
        <meta property="og:description" content="<?= $Wcms->page('description') ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>">
        <meta name="twitter:description" content="<?= $Wcms->page('description') ?>">
        <link rel="alternate" hreflang="<?= $language ?>" href="<?= $Wcms->url($currentPath) ?>">
        <link rel="alternate" hreflang="<?= $language === 'ar' ? 'en' : 'ar' ?>" href="<?= $Wcms->url($alternatePath) ?>">
        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
        <?= $Wcms->css() ?>
        <link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
    </head>
    <body>
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>

        <header class="site-header">
            <a class="brand" href="<?= $Wcms->url('en') ?>" aria-label="WonderCMS here.now Starter">
                <span class="brand-mark">W</span>
                <span><?= $Wcms->get('config', 'siteTitle') ?></span>
            </a>
            <nav class="site-nav" aria-label="Primary navigation">
                <ul class="menu">
                    <?= $Wcms->menu() ?>
                </ul>
            </nav>
            <a class="language-switcher" href="<?= $Wcms->url($alternatePath) ?>">
                <?= $language === 'ar' ? 'English' : 'العربية' ?>
            </a>
        </header>

        <main>
            <section class="hero">
                <div class="hero-copy">
                    <?= $Wcms->page('content') ?>
                </div>
                <aside class="publish-card">
                    <?= $Wcms->block('subside') ?>
                </aside>
            </section>
        </main>

        <footer class="site-footer">
            <?= $Wcms->footer() ?>
        </footer>

        <?= $Wcms->js() ?>
    </body>
</html>
