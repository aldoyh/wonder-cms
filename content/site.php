<?php

return [
    'generated_at' => '2026-05-29T00:00:00+00:00',
    'config' => [
        'siteTitle' => 'WonderCMS here.now Starter',
        'siteLang' => 'en',
        'adminLang' => 'en',
        'theme' => 'herenow',
        'defaultPage' => 'en',
        'login' => 'manage',
        'forceLogout' => false,
        'forceHttps' => false,
        'saveChangesPopup' => true,
        'modalPersistence' => true,
        'logoutToLoginScreen' => true,
        'password' => '$2y$10$wfxYwc1pK4C0s4VfLF0zoeGYx/iI7fKfHfxkyluQ/vv8K.L2CNiZK',
        'lastLogins' => [],
        'lastModulesSync' => null,
        'customModules' => [
            'themes' => [],
            'plugins' => [],
        ],
        'disabledPlugins' => [],
    ],
    'menuItems' => [
        [
            'name' => 'English',
            'slug' => 'en',
            'visibility' => 'show',
            'subpages' => [
                ['name' => 'About', 'slug' => 'about', 'visibility' => 'show'],
                ['name' => 'Contact', 'slug' => 'contact', 'visibility' => 'show'],
            ],
        ],
        [
            'name' => 'العربية',
            'slug' => 'ar',
            'visibility' => 'show',
            'subpages' => [
                ['name' => 'حول المشروع', 'slug' => 'about', 'visibility' => 'show'],
                ['name' => 'اتصل بنا', 'slug' => 'contact', 'visibility' => 'show'],
            ],
        ],
    ],
    'pages' => [
        '404' => [
            'title' => '404',
            'keywords' => '404, not found',
            'description' => 'Page not found.',
            'content' => '<h1>404 - Page not found</h1><p>The page you requested could not be found.</p>',
        ],
        'en' => [
            'title' => 'Home',
            'keywords' => 'WonderCMS, here.now, static publishing, bilingual CMS',
            'description' => 'A bilingual WonderCMS starter for here.now Drive and Sites publishing.',
            'contentFile' => 'content/en/home.html',
            'subpages' => [
                'about' => [
                    'title' => 'About',
                    'keywords' => 'WonderCMS starter, flat file CMS, static site',
                    'description' => 'Learn how this WonderCMS starter keeps content editable and deployments static.',
                    'contentFile' => 'content/en/about.html',
                ],
                'contact' => [
                    'title' => 'Contact',
                    'keywords' => 'contact, WonderCMS, here.now',
                    'description' => 'Contact page placeholder for the WonderCMS here.now starter.',
                    'contentFile' => 'content/en/contact.html',
                ],
            ],
        ],
        'ar' => [
            'title' => 'الرئيسية',
            'keywords' => 'WonderCMS, here.now, نشر ثابت, موقع ثنائي اللغة',
            'description' => 'قالب WonderCMS ثنائي اللغة للنشر عبر here.now.',
            'contentFile' => 'content/ar/home.html',
            'subpages' => [
                'about' => [
                    'title' => 'حول المشروع',
                    'keywords' => 'WonderCMS, نظام ملفات, نشر ثابت',
                    'description' => 'تعرف على طريقة عمل قالب WonderCMS المخصص.',
                    'contentFile' => 'content/ar/about.html',
                ],
                'contact' => [
                    'title' => 'اتصل بنا',
                    'keywords' => 'اتصال, WonderCMS, here.now',
                    'description' => 'صفحة تواصل افتراضية لقالب WonderCMS here.now.',
                    'contentFile' => 'content/ar/contact.html',
                ],
            ],
        ],
    ],
    'blocks' => [
        'subside' => [
            'content' => '<p class="eyebrow">Static-first</p><h2>Publish the generated bundle.</h2><p>WonderCMS powers editing and preview. The public site is static HTML and assets generated into <code>dist/</code>.</p>',
        ],
        'header' => [
            'content' => '<nav>WonderCMS here.now Starter</nav>',
        ],
        'footer' => [
            'content' => '&copy; 2026 WonderCMS here.now Starter. Built for static publishing.',
        ],
    ],
];
