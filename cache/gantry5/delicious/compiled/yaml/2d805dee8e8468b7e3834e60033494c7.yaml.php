<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/ishara/templates/delicious/gantry/theme.yaml',
    'modified' => 1562649532,
    'data' => [
        'details' => [
            'name' => 'delicious',
            'version' => '1.0.0',
            'icon' => 'paper-plane',
            'date' => 'March 16, 2016',
            'author' => [
                'name' => 'webkomp',
                'email' => 'biuro@web-komp.eu',
                'link' => 'http://web-komp.eu'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'copyright' => '(C) 2016 webkomp.pl, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'delicious Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'joomla',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'delicious',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'architectsdaughter' => [
                    400 => 'gantry-theme://fonts/architectsdaughter/architectsdaughter-webfont'
                ],
                'roboto' => [
                    400 => 'gantry-theme://fonts/roboto_regular_macroman/Roboto-Regular-webfont',
                    500 => 'gantry-theme://fonts/roboto_medium_macroman/Roboto-Medium-webfont',
                    700 => 'gantry-theme://fonts/roboto_bold_macroman/Roboto-Bold-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'delicious',
                    1 => 'delicious-joomla',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'delicious'
                ],
                'overrides' => [
                    0 => 'delicious-joomla',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4'
                ],
                'Effects' => [
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'center' => 'Center',
                    'full-width' => 'Full Width',
                    'equal-height' => 'Equal Height',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.0.*',
                'engine/nucleus' => '1.0.*',
                'asset/font-awesome' => 4.2,
                'particle/menu' => '1.0.*'
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent'
                ],
                'section' => [
                    0 => 'top',
                    1 => 'navigation',
                    2 => 'header',
                    3 => 'showcase',
                    4 => 'above',
                    5 => 'utility',
                    6 => 'sidebar',
                    7 => 'mainbar',
                    8 => 'aside',
                    9 => 'extension',
                    10 => 'bottom',
                    11 => 'footer',
                    12 => 'copyright',
                    13 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
