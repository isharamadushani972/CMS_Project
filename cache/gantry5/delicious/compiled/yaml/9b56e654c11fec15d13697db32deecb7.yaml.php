<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/particles/popupgrid.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'RokBox',
        'description' => 'Built your image grid (popup RokBox)',
        'type' => 'particle',
        'icon' => 'fa-arrows-alt',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'style' => [
                    'type' => 'select.selectize',
                    'label' => 'Particle style',
                    'default' => 'jvg-bloc-image-style-1',
                    'options' => [
                        'jvg-bloc-image-style-1' => 'Style 1 (opacity)',
                        'jvg-bloc-image-style-2' => 'Style 2 (zoom)',
                        'jvg-bloc-image-style-3' => 'Style 3 (polaroid-zoom)'
                    ]
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Define block title.',
                    'placeholder' => 'Your title ...'
                ],
                'titleclass' => [
                    'type' => 'input.selectize',
                    'label' => 'Title CSS Classes',
                    'description' => 'Set a specific CSS class for title custom styling.'
                ],
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Define block description.',
                    'placeholder' => 'A short description ...'
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid',
                    'description' => 'Défine number of columns',
                    'placeholder' => 'Select...',
                    'default' => 'g-imagegrille-2cols',
                    'options' => [
                        'g-imagegrille-2cols' => '2 columns',
                        'g-imagegrille-3cols' => '3 columns',
                        'g-imagegrille-4cols' => '4 columns',
                        'g-imagegrille-5cols' => '5 columns'
                    ]
                ],
                'album' => [
                    'type' => 'input.text',
                    'label' => 'Name of your album',
                    'description' => 'Define your album name.',
                    'placeholder' => 'Enter name of your album'
                ],
                'showcaption' => [
                    'type' => 'input.checkbox',
                    'label' => 'Caption',
                    'description' => 'Publish caption below image.',
                    'default' => false
                ],
                'footer' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Texte under Grid',
                    'description' => 'If needed, text under grid.',
                    'placeholder' => 'A short description'
                ],
                'imagegrilleelements' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Images',
                    'description' => 'Create each picture of your Grid.',
                    'value' => 'titre',
                    'ajax' => true,
                    'fields' => [
                        '.titre' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'skip' => true
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Your image',
                            'description' => 'Select your image.'
                        ],
                        '.legende' => [
                            'type' => 'input.text',
                            'label' => 'Caption',
                            'description' => 'Caption of your image in the popup too.',
                            'placeholder' => 'Enter your caption'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
