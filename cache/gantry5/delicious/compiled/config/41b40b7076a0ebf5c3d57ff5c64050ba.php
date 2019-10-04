<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1562822453,
    'checksum' => '1d9cd5de7ce41bd001ec7ef0339fdf26',
    'files' => [
        'templates/delicious/custom/config/default' => [
            'index' => [
                'file' => 'templates/delicious/custom/config/default/index.yaml',
                'modified' => 1562734673
            ],
            'layout' => [
                'file' => 'templates/delicious/custom/config/default/layout.yaml',
                'modified' => 1562649532
            ]
        ],
        'templates/delicious/config/default' => [
            'page' => [
                'file' => 'templates/delicious/config/default/page.yaml',
                'modified' => 1562649532
            ],
            'particles/logo' => [
                'file' => 'templates/delicious/config/default/particles/logo.yaml',
                'modified' => 1562649532
            ],
            'particles/totop' => [
                'file' => 'templates/delicious/config/default/particles/totop.yaml',
                'modified' => 1562649532
            ],
            'styles' => [
                'file' => 'templates/delicious/config/default/styles.yaml',
                'modified' => 1562649532
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => '',
                'text' => 'Delicious.',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => NULL,
                'class' => 'g-totop',
                'icon' => 'fa fa-arrow-circle-o-up fa-2x',
                'content' => ''
            ],
            'scrollreveal-js' => [
                'enabled' => true,
                'mobile' => 'false'
            ],
            'wow-js' => [
                'enabled' => true,
                'offset' => '200',
                'mobile' => 'true'
            ],
            'accordion' => [
                'enabled' => true,
                'collapse' => 'true',
                'showfirst' => 'true'
            ],
            'blockcontent' => [
                'enabled' => true
            ],
            'contentcubes' => [
                'enabled' => true
            ],
            'fixed-header' => [
                'enabled' => true,
                'mobile' => 'disable',
                'secondtrigger' => false
            ],
            'googlemap' => [
                'enabled' => true,
                'width' => '100%',
                'height' => '500px',
                'maptype' => 'ROADMAP',
                'latitude' => 52.052312,
                'longitude' => 4.447141,
                'zoom' => 7,
                'markerstate' => 1,
                'scrollwheel' => 0
            ],
            'headroom' => [
                'enabled' => true,
                'animation' => 'slide',
                'mobile' => 'disable'
            ],
            'newsletter' => [
                'enabled' => true
            ],
            'onepage-menu' => [
                'enabled' => true,
                'stickyoffset' => 130,
                'smoothscrolloffset' => 120,
                'boundary' => '#g-footer'
            ],
            'popupgrid' => [
                'enabled' => true,
                'style' => 'jvg-bloc-image-style-1',
                'cols' => 'g-imagegrille-2cols',
                'showcaption' => false
            ],
            'sample' => [
                'enabled' => true
            ],
            'slider' => [
                'enabled' => true,
                'height' => 'auto',
                'autoplay' => 'true',
                'autoplayInterval' => 7000,
                'navigation' => 'arrows',
                'animation' => 'fade',
                'animationDuration' => 500,
                'kenburns' => 'false',
                'pauseOnHover' => 'true',
                'fullscreen' => 0
            ],
            'tabs' => [
                'enabled' => true,
                'layout' => 'top',
                'tabswidth' => 2,
                'justify' => 'no',
                'justifynumber' => '',
                'animation' => 'none'
            ],
            'uikit' => [
                'enabled' => true,
                'jslocation' => 'footer'
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#68aed1',
                'color-2' => '#34322e'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#818181',
                'body-font' => 'family=Abel',
                'heading-font' => 'family=Architects+Daughter'
            ],
            'bottom' => [
                'background' => '#ffffff',
                'text-color' => '#818181'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'copyright' => [
                'background' => '#222222',
                'text-color' => '#ffffff'
            ],
            'extension' => [
                'background' => '#f7f7f7',
                'text-color' => '#818181'
            ],
            'footer' => [
                'background' => '#2a2a2a',
                'text-color' => '#ffffff'
            ],
            'header' => [
                'background' => '#68aed1',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#818181'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#ffffff',
                'text-color' => '#818181',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#333333',
                'text-color' => '#ffffff',
                'toggle-color' => '#222222',
                'width' => '20rem'
            ],
            'showcase' => [
                'background' => '#ffffff',
                'text-color' => '#818181'
            ],
            'slideshow' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'top' => [
                'background' => '#f7f7f7',
                'text-color' => '#818181'
            ],
            'utility' => [
                'background' => '#ffffff',
                'text-color' => '#818181'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 1562649532,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1469193701
            ],
            'positions' => [
                'header-a' => 'Header-A',
                'header-b' => 'Header-B',
                'header-c' => 'Header-C',
                'navigation-a' => 'Navigation-A',
                'navigation-b' => 'Navigation-B',
                'navigation-c' => 'Navigation-C',
                'slideshow' => 'Slideshow',
                'top-a' => 'Top A',
                'top-b' => 'Top B',
                'top-c' => 'Top C',
                'showcase-a' => 'Showcase-A',
                'showcase-b' => 'Showcase-B',
                'showcase-c' => 'Showcase-C',
                'utility-a' => 'Utility-A',
                'utility-b' => 'Utility-B',
                'utility-c' => 'Utility-C',
                'sidebar' => 'Sidebar',
                'mainbar-a' => 'Mainbar-A',
                'mainbar-b' => 'Mainbar-B',
                'mainbar-c' => 'Mainbar-C',
                'aside' => 'Aside',
                'extension-a' => 'Extension-A',
                'extension-b' => 'Extension-B',
                'extension-c' => 'Extension-C',
                'bottom-a' => 'Bottom-A',
                'bottom-b' => 'Bottom-B',
                'bottom-c' => 'Bottom-C',
                'footer-a' => 'Footer-A',
                'footer-b' => 'Footer-B',
                'footer-c' => 'Footer-C',
                'footer-d' => 'Footer-D'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'top' => 'Top',
                'showcase' => 'Showcase',
                'utility' => 'Utility',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'aside' => 'Aside',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-position-9165' => 'Header-A',
                    'position-position-3848' => 'Header-B',
                    'position-position-6042' => 'Header-C',
                    'position-position-3226' => 'Navigation-A',
                    'position-position-6585' => 'Navigation-B',
                    'position-position-6673' => 'Navigation-C',
                    'position-position-4067' => 'Slideshow',
                    'position-position-7642' => 'Top A',
                    'position-position-5544' => 'Top B',
                    'position-position-5776' => 'Top C',
                    'position-position-8121' => 'Showcase-A',
                    'position-position-5404' => 'Showcase-B',
                    'position-position-2509' => 'Showcase-C',
                    'position-position-8460' => 'Utility-A',
                    'position-position-5807' => 'Utility-B',
                    'position-position-8744' => 'Utility-C',
                    'position-position-9790' => 'Sidebar',
                    'position-position-9178' => 'Mainbar-A',
                    'position-position-8966' => 'Mainbar-B',
                    'position-position-9290' => 'Mainbar-C',
                    'position-position-6029' => 'Aside',
                    'position-position-9539' => 'Extension-A',
                    'position-position-5616' => 'Extension-B',
                    'position-position-1334' => 'Extension-C',
                    'position-position-5629' => 'Bottom-A',
                    'position-position-6558' => 'Bottom-B',
                    'position-position-2521' => 'Bottom-C',
                    'position-position-4173' => 'Footer-A',
                    'position-position-7002' => 'Footer-B',
                    'position-position-5898' => 'Footer-C',
                    'position-footer' => 'Footer-D'
                ],
                'logo' => [
                    'logo-8433' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-2758' => 'Menu'
                ],
                'content' => [
                    'system-content-9532' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-1069' => 'Copyright'
                ],
                'branding' => [
                    'branding-7884' => 'Branding'
                ],
                'totop' => [
                    'totop-5132' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-7283' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1469193701
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'position-position-9165 33.3',
                        1 => 'position-position-3848 33.3',
                        2 => 'position-position-6042 33.3'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-8433 20',
                        1 => 'menu-2758 80'
                    ],
                    1 => [
                        0 => 'position-position-3226 33.3',
                        1 => 'position-position-6585 33.3',
                        2 => 'position-position-6673 33.3'
                    ]
                ],
                '/slideshow/' => [
                    0 => [
                        0 => 'position-position-4067'
                    ]
                ],
                '/top/' => [
                    0 => [
                        0 => 'position-position-7642 33.3',
                        1 => 'position-position-5544 33.3',
                        2 => 'position-position-5776 33.3'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'position-position-8121 33.3',
                        1 => 'position-position-5404 33.3',
                        2 => 'position-position-2509 33.3'
                    ]
                ],
                '/utility/' => [
                    0 => [
                        0 => 'position-position-8460 33.3',
                        1 => 'position-position-5807 33.3',
                        2 => 'position-position-8744 33.3'
                    ]
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 20' => [
                                0 => [
                                    0 => 'position-position-9790'
                                ]
                            ]
                        ],
                        1 => [
                            'mainbar 60' => [
                                0 => [
                                    0 => 'position-position-9178 33.3',
                                    1 => 'position-position-8966 33.3',
                                    2 => 'position-position-9290 33.3'
                                ],
                                1 => [
                                    0 => 'system-content-9532'
                                ]
                            ]
                        ],
                        2 => [
                            'aside 20' => [
                                0 => [
                                    0 => 'position-position-6029'
                                ]
                            ]
                        ]
                    ]
                ],
                '/extension/' => [
                    0 => [
                        0 => 'position-position-9539 33.3',
                        1 => 'position-position-5616 33.3',
                        2 => 'position-position-1334 33.3'
                    ]
                ],
                '/bottom/' => [
                    0 => [
                        0 => 'position-position-5629 33.3',
                        1 => 'position-position-6558 33.3',
                        2 => 'position-position-2521 33.3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-position-4173 25',
                        1 => 'position-position-7002 25',
                        2 => 'position-position-5898 25',
                        3 => 'position-footer 25'
                    ]
                ],
                '/copyright/' => [
                    0 => [
                        0 => 'copyright-1069 33.3',
                        1 => 'branding-7884 33.3',
                        2 => 'totop-5132 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-7283'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'slideshow' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'top' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'sidebar' => [
                    'type' => 'section'
                ],
                'mainbar' => [
                    'type' => 'section'
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'extension' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'copyright' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'position-position-9165' => [
                    'title' => 'Header-A',
                    'attributes' => [
                        'key' => 'header-a'
                    ]
                ],
                'position-position-3848' => [
                    'title' => 'Header-B',
                    'attributes' => [
                        'key' => 'header-b'
                    ]
                ],
                'position-position-6042' => [
                    'title' => 'Header-C',
                    'attributes' => [
                        'key' => 'header-c'
                    ]
                ],
                'logo-8433' => [
                    'title' => 'Logo / Image'
                ],
                'position-position-3226' => [
                    'title' => 'Navigation-A',
                    'attributes' => [
                        'key' => 'navigation-a'
                    ]
                ],
                'position-position-6585' => [
                    'title' => 'Navigation-B',
                    'attributes' => [
                        'key' => 'navigation-b'
                    ]
                ],
                'position-position-6673' => [
                    'title' => 'Navigation-C',
                    'attributes' => [
                        'key' => 'navigation-c'
                    ]
                ],
                'position-position-4067' => [
                    'title' => 'Slideshow',
                    'attributes' => [
                        'key' => 'slideshow'
                    ]
                ],
                'position-position-7642' => [
                    'title' => 'Top A',
                    'attributes' => [
                        'key' => 'top-a'
                    ]
                ],
                'position-position-5544' => [
                    'title' => 'Top B',
                    'attributes' => [
                        'key' => 'top-b'
                    ]
                ],
                'position-position-5776' => [
                    'title' => 'Top C',
                    'attributes' => [
                        'key' => 'top-c'
                    ]
                ],
                'position-position-8121' => [
                    'title' => 'Showcase-A',
                    'attributes' => [
                        'key' => 'showcase-a'
                    ]
                ],
                'position-position-5404' => [
                    'title' => 'Showcase-B',
                    'attributes' => [
                        'key' => 'showcase-b'
                    ]
                ],
                'position-position-2509' => [
                    'title' => 'Showcase-C',
                    'attributes' => [
                        'key' => 'showcase-c'
                    ]
                ],
                'position-position-8460' => [
                    'title' => 'Utility-A',
                    'attributes' => [
                        'key' => 'utility-a'
                    ]
                ],
                'position-position-5807' => [
                    'title' => 'Utility-B',
                    'attributes' => [
                        'key' => 'utility-b'
                    ]
                ],
                'position-position-8744' => [
                    'title' => 'Utility-C',
                    'attributes' => [
                        'key' => 'utility-c'
                    ]
                ],
                'position-position-9790' => [
                    'title' => 'Sidebar',
                    'attributes' => [
                        'key' => 'sidebar'
                    ]
                ],
                'position-position-9178' => [
                    'title' => 'Mainbar-A',
                    'attributes' => [
                        'key' => 'mainbar-a'
                    ]
                ],
                'position-position-8966' => [
                    'title' => 'Mainbar-B',
                    'attributes' => [
                        'key' => 'mainbar-b'
                    ]
                ],
                'position-position-9290' => [
                    'title' => 'Mainbar-C',
                    'attributes' => [
                        'key' => 'mainbar-c'
                    ]
                ],
                'position-position-6029' => [
                    'title' => 'Aside',
                    'attributes' => [
                        'key' => 'aside'
                    ]
                ],
                'position-position-9539' => [
                    'title' => 'Extension-A',
                    'attributes' => [
                        'key' => 'extension-a'
                    ]
                ],
                'position-position-5616' => [
                    'title' => 'Extension-B',
                    'attributes' => [
                        'key' => 'extension-b'
                    ]
                ],
                'position-position-1334' => [
                    'title' => 'Extension-C',
                    'attributes' => [
                        'key' => 'extension-c'
                    ]
                ],
                'position-position-5629' => [
                    'title' => 'Bottom-A',
                    'attributes' => [
                        'key' => 'bottom-a'
                    ]
                ],
                'position-position-6558' => [
                    'title' => 'Bottom-B',
                    'attributes' => [
                        'key' => 'bottom-b'
                    ]
                ],
                'position-position-2521' => [
                    'title' => 'Bottom-C',
                    'attributes' => [
                        'key' => 'bottom-c'
                    ]
                ],
                'position-position-4173' => [
                    'title' => 'Footer-A',
                    'attributes' => [
                        'key' => 'footer-a'
                    ]
                ],
                'position-position-7002' => [
                    'title' => 'Footer-B',
                    'attributes' => [
                        'key' => 'footer-b'
                    ]
                ],
                'position-position-5898' => [
                    'title' => 'Footer-C',
                    'attributes' => [
                        'key' => 'footer-c'
                    ]
                ],
                'position-footer' => [
                    'title' => 'Footer-D',
                    'attributes' => [
                        'key' => 'footer-d'
                    ]
                ],
                'copyright-1069' => [
                    'attributes' => [
                        'date' => [
                            'end' => ''
                        ],
                        'owner' => 'www.web-komp.eu'
                    ]
                ],
                'branding-7884' => [
                    'attributes' => [
                        'enabled' => 0,
                        'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>'
                    ]
                ],
                'totop-5132' => [
                    'title' => 'To Top',
                    'attributes' => [
                        'icon' => 'fa fa-angle-double-up fa-fw fa-lg',
                        'content' => ''
                    ]
                ]
            ]
        ]
    ]
];
