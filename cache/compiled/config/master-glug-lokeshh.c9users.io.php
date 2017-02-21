<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1487655277,
    'checksum' => 'e2c5530025d4e6f63dd78bc26514db2e',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1487494962
            ],
            'plugins/bootstrapper' => [
                'file' => 'user/config/plugins/bootstrapper.yaml',
                'modified' => 1487518094
            ],
            'plugins/custom-css' => [
                'file' => 'user/config/plugins/custom-css.yaml',
                'modified' => 1487517885
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1487494962
            ],
            'plugins/ganalytics' => [
                'file' => 'user/config/plugins/ganalytics.yaml',
                'modified' => 1487494962
            ],
            'plugins/gitter' => [
                'file' => 'user/config/plugins/gitter.yaml',
                'modified' => 1487494962
            ],
            'plugins/recaptchacontact' => [
                'file' => 'user/config/plugins/recaptchacontact.yaml',
                'modified' => 1487494962
            ],
            'plugins/sitemap' => [
                'file' => 'user/config/plugins/sitemap.yaml',
                'modified' => 1487494962
            ],
            'plugins/smileys' => [
                'file' => 'user/config/plugins/smileys.yaml',
                'modified' => 1487494962
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1487494962
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1487494962
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1487494962
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1487655218
            ],
            'themes/antimatter' => [
                'file' => 'user/config/themes/antimatter.yaml',
                'modified' => 1487494962
            ],
            'themes/bootstrap' => [
                'file' => 'user/config/themes/bootstrap.yaml',
                'modified' => 1487516515
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1487516515
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1487516515
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1487516515
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1487516515
            ]
        ],
        'user/plugins' => [
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1487494963
            ],
            'plugins/bootstrapper' => [
                'file' => 'user/plugins/bootstrapper/bootstrapper.yaml',
                'modified' => 1487516515
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1487494963
            ],
            'plugins/custom-css' => [
                'file' => 'user/plugins/custom-css/custom-css.yaml',
                'modified' => 1487494963
            ],
            'plugins/gravstrap' => [
                'file' => 'user/plugins/gravstrap/gravstrap.yaml',
                'modified' => 1487494963
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/ganalytics.yaml',
                'modified' => 1487494963
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1487494963
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1487494963
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1487494962
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1487494963
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1487494963
            ],
            'plugins/smileys' => [
                'file' => 'user/plugins/smileys/smileys.yaml',
                'modified' => 1487494963
            ],
            'plugins/recaptchacontact' => [
                'file' => 'user/plugins/recaptchacontact/recaptchacontact.yaml',
                'modified' => 1487494963
            ],
            'plugins/github' => [
                'file' => 'user/plugins/github/github.yaml',
                'modified' => 1487494963
            ],
            'plugins/gitter' => [
                'file' => 'user/plugins/gitter/gitter.yaml',
                'modified' => 1487494963
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1487494963
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1487494963
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect_after_login' => NULL,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ]
            ],
            'bootstrapper' => [
                'enabled' => false,
                'always_load' => true,
                'use_cdn' => false,
                'mode' => 'production',
                'load_core_css' => true,
                'load_theme_css' => true,
                'load_core_js' => true
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'custom-css' => [
                'enabled' => false,
                'css_files' => [
                    0 => [
                        'path' => '/user/CSS/custom.css',
                        'priority' => 0
                    ]
                ]
            ],
            'gravstrap' => [
                'enabled' => true
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => 'UA-83197456-1',
                'anonymizeIp' => false,
                'renameGa' => '',
                'debugStatus' => false,
                'debugTrace' => false
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'lokeshhsharma@gmail.com',
                'from_name' => 'Glug Nith',
                'to' => 'lokeshhsharma@gmail.com',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'wordpress',
                'fontawesome' => [
                    'load' => true,
                    'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'smileys' => [
                'enabled' => false,
                'built_in_css' => true,
                'weight' => 1,
                'pack' => 'simple_smileys',
                'process' => true,
                'exclude' => [
                    'tags' => [
                        0 => 'code',
                        1 => 'pre'
                    ],
                    'classes' => [
                        0 => 'mathjax',
                        1 => 'latex'
                    ]
                ]
            ],
            'recaptchacontact' => [
                'enabled' => true,
                'default_lang' => 'en',
                'disable_css' => false,
                'inject_template' => true,
                'grecaptcha_sitekey' => '6LckmCgTAAAAAMlnQvhE9_FWL-xqhUjnLmrBr04p',
                'grecaptcha_secret' => '6LckmCgTAAAAAIk8ZL5L_eQKX-n8s5Y3ckTQin7-'
            ],
            'github' => [
                'enabled' => true,
                'auth' => [
                    'method' => '',
                    'token' => '',
                    'password' => ''
                ]
            ],
            'gitter' => [
                'enabled' => true,
                'enable_on_routes' => [
                    0 => '/'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ],
                'channel' => 'Nithmr/glugWebsite'
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'ignores' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'GLUG-NITH',
            'default_lang' => 'en',
            'author' => [
                'name' => 'GLUG - NITH Community',
                'email' => 'lokeshhsharma@gmail.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'GLUG NITH is a moniker for the GNU/Linux User Group of National Institute of Technology, Hamirpur. Our GLUG is mainly designed to cater to the GNU/Linux related needs of the students, faculty, staff, and anybody else belonging to NIT Hamirpur. We are a heterogeneous mixture of people ranging from the beta testers and kernel hackers to the fresh-faced newbies, held together together by a common love for GNU/Linux in particular and Free Software in general.',
                'author' => 'GLUG - NITH Community',
                'keywords' => 'LUG, LUG India, GLUG, NITH, Linux User Groups, Ubuntu Mirrors, fedora mirrors, LDP mirror, Linux, Unix, Glug, Hamirpur, NIT, NIT Hamirpur, LUG Shimla, NIT club, Glug community, Open source'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Asia/Kolkata',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'antimatter',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => 'd-m-Y H:i',
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form'
                    ]
                ],
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 100,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'idguBmwk1zVtGX'
        ],
        'themes' => [
            'antimatter' => [
                'dropdown' => [
                    'enabled' => true
                ]
            ],
            'bootstrap' => [
                'dropdown' => [
                    'enabled' => true
                ]
            ]
        ]
    ]
];
