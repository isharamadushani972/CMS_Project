<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/blueprints/styles/accent.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Delicious theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#ffc000'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#34322e'
                ]
            ]
        ]
    ]
];
