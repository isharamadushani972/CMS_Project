<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1562653866,
    'checksum' => 'b0da3b6d2c1f13655a42c2e185977d7d',
    'files' => [
        'templates/delicious/custom/config/_offline' => [
            'index' => [
                'file' => 'templates/delicious/custom/config/_offline/index.yaml',
                'modified' => 1562649532
            ],
            'layout' => [
                'file' => 'templates/delicious/custom/config/_offline/layout.yaml',
                'modified' => 1562649532
            ]
        ],
        'templates/delicious/config/_offline' => [
            'page' => [
                'file' => 'templates/delicious/config/_offline/page.yaml',
                'modified' => 1562649532
            ]
        ],
        'templates/delicious/custom/config/default' => [
            'index' => [
                'file' => 'templates/delicious/custom/config/default/index.yaml',
                'modified' => 1562649532
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
                'class' => 'gantry offline',
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
            'name' => '_offline',
            'timestamp' => 1471774982,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1469191292
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'main' => 'Main',
                'footer' => 'Footer'
            ],
            'particles' => [
                'logo' => [
                    'logo-6113' => 'Logo'
                ],
                'spacer' => [
                    'spacer-6539' => 'Spacer',
                    'spacer-5663' => 'Spacer'
                ],
                'messages' => [
                    'system-messages-4833' => 'System Messages'
                ],
                'content' => [
                    'system-content-3011' => 'Page Content'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-6361' => 'Copyright'
                ],
                'branding' => [
                    'branding-8689' => 'Branding'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1469191292
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-6113 30',
                        1 => 'spacer-6539 70'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-4833'
                    ],
                    1 => [
                        0 => 'system-content-3011'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-6361 40',
                        1 => 'spacer-5663 30',
                        2 => 'branding-8689 30'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'copyright-6361' => [
                    'attributes' => [
                        'enabled' => 0
                    ]
                ],
                'branding-8689' => [
                    'attributes' => [
                        'content' => '©Delicious.  Developer with  <i class="fa fa-heart-o bounceIn animated infinite " style="color: #FF0000;"></i> By  <a href="http://web-komp.eu" title="WebKomp" class="g-powered-by">WebKomp</a>


'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ]
            ]
        ]
    ]
];
