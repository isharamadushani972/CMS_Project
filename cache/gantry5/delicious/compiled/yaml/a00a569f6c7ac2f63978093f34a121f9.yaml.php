<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/particles/accordion.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Accordion',
        'description' => 'Display an Accordion.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Accordion particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'collapse' => [
                    'type' => 'select.select',
                    'label' => 'Collapse sections',
                    'description' => 'Display multiple content sections at the same time without one collapsing when the other one is opened.',
                    'placeholder' => 'Select...',
                    'default' => 'true',
                    'options' => [
                        'true' => 'Yes',
                        'false' => 'No'
                    ]
                ],
                'showfirst' => [
                    'type' => 'select.select',
                    'label' => 'Show First',
                    'description' => 'Select if the first Accordion item should be opened by default.',
                    'placeholder' => 'Select...',
                    'default' => 'true',
                    'options' => [
                        'true' => 'Yes',
                        'false' => 'No'
                    ]
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Accordion Items',
                    'description' => 'Create each Accordion item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag Attributes',
                            'description' => 'Extra Tag attributes.',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'id',
                                1 => 'class'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
