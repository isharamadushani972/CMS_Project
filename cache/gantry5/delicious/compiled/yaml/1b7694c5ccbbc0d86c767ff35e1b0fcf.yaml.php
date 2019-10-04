<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/blueprints/styles/bottom.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Bottom Styles',
        'description' => 'Footer colors for the Delicious theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#818181'
                ]
            ]
        ]
    ]
];
