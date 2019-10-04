<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/blueprints/styles/base.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Delicious theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#818181'
                ],
                'body-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'family=Abel'
                ],
                'heading-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Heading Font',
                    'default' => 'family=Architects+Daughter'
                ]
            ]
        ]
    ]
];
