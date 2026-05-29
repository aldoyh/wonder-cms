{
    "config": {
        "siteTitle": "WonderCMS here.now Starter",
        "siteLang": "en",
        "adminLang": "en",
        "theme": "herenow",
        "defaultPage": "en",
        "login": "manage",
        "forceLogout": false,
        "forceHttps": false,
        "saveChangesPopup": true,
        "modalPersistence": true,
        "logoutToLoginScreen": true,
        "password": "$2y$10$wfxYwc1pK4C0s4VfLF0zoeGYx\/iI7fKfHfxkyluQ\/vv8K.L2CNiZK",
        "lastLogins": {},
        "lastModulesSync": null,
        "customModules": {
            "themes": {},
            "plugins": {}
        },
        "disabledPlugins": {},
        "menuItems": {
            "0": {
                "name": "English",
                "slug": "en",
                "visibility": "show",
                "subpages": {
                    "0": {
                        "name": "About",
                        "slug": "about",
                        "visibility": "show",
                        "subpages": {}
                    },
                    "1": {
                        "name": "Contact",
                        "slug": "contact",
                        "visibility": "show",
                        "subpages": {}
                    }
                }
            },
            "1": {
                "name": "العربية",
                "slug": "ar",
                "visibility": "show",
                "subpages": {
                    "0": {
                        "name": "حول المشروع",
                        "slug": "about",
                        "visibility": "show",
                        "subpages": {}
                    },
                    "1": {
                        "name": "اتصل بنا",
                        "slug": "contact",
                        "visibility": "show",
                        "subpages": {}
                    }
                }
            }
        }
    },
    "pages": {
        "404": {
            "created": "2026-05-29T00:00:00+00:00",
            "modified": "2026-05-29T00:00:00+00:00",
            "visibility": "show",
            "title": "404",
            "keywords": "404, not found",
            "description": "Page not found.",
            "content": "<h1>404 - Page not found<\/h1><p>The page you requested could not be found.<\/p>",
            "subpages": {}
        },
        "en": {
            "created": "2026-05-29T00:00:00+00:00",
            "modified": "2026-05-29T00:00:00+00:00",
            "visibility": "show",
            "title": "Home",
            "keywords": "WonderCMS, here.now, static publishing, bilingual CMS",
            "description": "A bilingual WonderCMS starter for here.now Drive and Sites publishing.",
            "content": "<p class=\"hero-kicker\">WonderCMS × here.now<\/p>\n<h1>Bilingual publishing without a database.<\/h1>\n<p class=\"lead\">A customized WonderCMS starter for editing PHP-powered content, exporting it to static files, storing the bundle in here.now Drive, and publishing it on here.now Sites.<\/p>\n<p class=\"cta-row\"><a href=\"\/en\/about\/\">View the starter<\/a><a href=\"\/ar\/\">العربية<\/a><\/p>\n<div class=\"feature-grid\">\n    <div class=\"feature-card\"><h3>Flat-file CMS<\/h3><p>Edit locally with WonderCMS and commit the generated JSON database.<\/p><\/div>\n    <div class=\"feature-card\"><h3>Static output<\/h3><p>CI crawls the PHP site and writes deployable HTML into <code>dist\/<\/code>.<\/p><\/div>\n    <div class=\"feature-card\"><h3>Bilingual-ready<\/h3><p>English and Arabic pages ship with language switching and RTL support.<\/p><\/div>\n<\/div>",
            "subpages": {
                "about": {
                    "created": "2026-05-29T00:00:00+00:00",
                    "modified": "2026-05-29T00:00:00+00:00",
                    "visibility": "show",
                    "title": "About",
                    "keywords": "WonderCMS starter, flat file CMS, static site",
                    "description": "Learn how this WonderCMS starter keeps content editable and deployments static.",
                    "content": "<p class=\"eyebrow\">About<\/p>\n<h1>A tiny CMS starter for fast publishing teams.<\/h1>\n<p class=\"lead\">This starter keeps editorial content in the repository, uses WonderCMS for PHP previews, and treats generated static HTML as the deployable artifact.<\/p>\n<p>Use the <code>content\/<\/code> directory as the source of truth, run the hydration script to rebuild WonderCMS data, and let GitHub Actions produce the final static bundle.<\/p>",
                    "subpages": {}
                },
                "contact": {
                    "created": "2026-05-29T00:00:00+00:00",
                    "modified": "2026-05-29T00:00:00+00:00",
                    "visibility": "show",
                    "title": "Contact",
                    "keywords": "contact, WonderCMS, here.now",
                    "description": "Contact page placeholder for the WonderCMS here.now starter.",
                    "content": "<p class=\"eyebrow\">Contact<\/p>\n<h1>Replace this page with your contact details.<\/h1>\n<p class=\"lead\">Use this boilerplate for email, phone, office address, social links, or an embedded static form provider.<\/p>\n<p>Email: <a href=\"mailto:hello@example.com\">hello@example.com<\/a><\/p>",
                    "subpages": {}
                }
            }
        },
        "ar": {
            "created": "2026-05-29T00:00:00+00:00",
            "modified": "2026-05-29T00:00:00+00:00",
            "visibility": "show",
            "title": "الرئيسية",
            "keywords": "WonderCMS, here.now, نشر ثابت, موقع ثنائي اللغة",
            "description": "قالب WonderCMS ثنائي اللغة للنشر عبر here.now.",
            "content": "<p class=\"hero-kicker\">WonderCMS × here.now<\/p>\n<h1>نشر ثنائي اللغة بدون قاعدة بيانات.<\/h1>\n<p class=\"lead\">نسخة مخصصة من WonderCMS لتحرير المحتوى عبر PHP، ثم تصديره كملفات ثابتة ورفعه إلى here.now Drive ونشره على here.now Sites.<\/p>\n<p class=\"cta-row\"><a href=\"\/ar\/about\/\">تعرف على القالب<\/a><a href=\"\/en\/\">English<\/a><\/p>\n<div class=\"feature-grid\">\n    <div class=\"feature-card\"><h3>نظام ملفات مسطح<\/h3><p>حرّر المحتوى محلياً واحفظ قاعدة JSON داخل المستودع.<\/p><\/div>\n    <div class=\"feature-card\"><h3>تصدير ثابت<\/h3><p>يقوم CI بزحف موقع PHP وكتابة HTML قابل للنشر داخل <code>dist\/<\/code>.<\/p><\/div>\n    <div class=\"feature-card\"><h3>جاهز للغتين<\/h3><p>صفحات إنجليزية وعربية مع تبديل اللغة ودعم RTL.<\/p><\/div>\n<\/div>",
            "subpages": {
                "about": {
                    "created": "2026-05-29T00:00:00+00:00",
                    "modified": "2026-05-29T00:00:00+00:00",
                    "visibility": "show",
                    "title": "حول المشروع",
                    "keywords": "WonderCMS, نظام ملفات, نشر ثابت",
                    "description": "تعرف على طريقة عمل قالب WonderCMS المخصص.",
                    "content": "<p class=\"eyebrow\">حول المشروع<\/p>\n<h1>بداية صغيرة وسريعة لفرق النشر.<\/h1>\n<p class=\"lead\">يحافظ هذا القالب على المحتوى التحريري داخل المستودع، ويستخدم WonderCMS للمعاينة، ثم يتعامل مع الموقع الثابت الناتج كحزمة النشر النهائية.<\/p>\n<p>استخدم مجلد <code>content\/<\/code> كمصدر للحقيقة، وشغّل سكربت التهيئة لإعادة بناء بيانات WonderCMS، ثم اترك GitHub Actions ينتج الحزمة النهائية.<\/p>",
                    "subpages": {}
                },
                "contact": {
                    "created": "2026-05-29T00:00:00+00:00",
                    "modified": "2026-05-29T00:00:00+00:00",
                    "visibility": "show",
                    "title": "اتصل بنا",
                    "keywords": "اتصال, WonderCMS, here.now",
                    "description": "صفحة تواصل افتراضية لقالب WonderCMS here.now.",
                    "content": "<p class=\"eyebrow\">اتصل بنا<\/p>\n<h1>استبدل هذه الصفحة ببيانات التواصل الخاصة بك.<\/h1>\n<p class=\"lead\">استخدم هذه الصفحة للبريد الإلكتروني أو الهاتف أو العنوان أو روابط التواصل أو مزود نماذج ثابت.<\/p>\n<p>البريد الإلكتروني: <a href=\"mailto:hello@example.com\">hello@example.com<\/a><\/p>",
                    "subpages": {}
                }
            }
        }
    },
    "blocks": {
        "subside": {
            "content": "<p class=\"eyebrow\">Static-first<\/p><h2>Publish the generated bundle.<\/h2><p>WonderCMS powers editing and preview. The public site is static HTML and assets generated into <code>dist\/<\/code>.<\/p>"
        },
        "header": {
            "content": "<nav>WonderCMS here.now Starter<\/nav>"
        },
        "footer": {
            "content": "&copy; 2026 WonderCMS here.now Starter. Built for static publishing."
        }
    }
}
