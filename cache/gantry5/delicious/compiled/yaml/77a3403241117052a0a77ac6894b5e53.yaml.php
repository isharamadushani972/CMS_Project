<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/particles/blockcontent.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Block Content',
        'description' => 'Displays Block Content',
        'type' => 'particle',
        'icon' => 'fa-th-large',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.'
                ],
                'headline' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'description' => 'Customize the headline text.',
                    'placeholder' => 'Enter headline'
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.'
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Customize the link text.'
                ],
                'subcontents' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.img' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.rokboximage' => [
                            'type' => 'input.imagepicker',
                            'label' => 'RokBox Image',
                            'description' => 'Select the rokbox image.'
                        ],
                        '.rokboxcaption' => [
                            'type' => 'input.text',
                            'label' => 'Caption',
                            'description' => 'Customize the rokbox caption.',
                            'placeholder' => 'Enter caption'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Sub Title'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'CSS class name for the particle.'
                        ],
                        '.button' => [
                            'type' => 'input.text',
                            'label' => 'Button Label',
                            'description' => 'Specify the button label.'
                        ],
                        '.buttonlink' => [
                            'type' => 'input.text',
                            'label' => 'Button Link',
                            'description' => 'Specify the button link.'
                        ],
                        '.buttonclass' => [
                            'type' => 'input.selectize',
                            'label' => 'Button Classes',
                            'description' => 'CSS class names for the button.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
