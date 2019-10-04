<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/blueprints/styles/extension.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the Delicious theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f7f7f7'
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
