<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/particles/headroom.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Headroom.js',
        'description' => 'Configure Headroom.js (Fixed Header).',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Headroom.js particles.',
                    'default' => true
                ],
                'cssselector' => [
                    'type' => 'input.text',
                    'description' => 'Enter the CSS Selector for the element that should get fixed/sticky, for example \'#g-header\'.',
                    'label' => 'CSS Selector',
                    'placeholder' => '#g-header'
                ],
                'offset' => [
                    'type' => 'input.text',
                    'description' => 'Enter the top offset in pixels (do NOT add \'px\' at the end). This offset tells when the animation should take place.',
                    'label' => 'Offset',
                    'placeholder' => '300'
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation',
                    'description' => 'Select the animation effect.',
                    'placeholder' => 'Select...',
                    'default' => 'slide',
                    'options' => [
                        'slide' => 'Slide',
                        'swing' => 'Swing',
                        'flip' => 'Flip',
                        'bounce' => 'Bounce'
                    ]
                ],
                'mobile' => [
                    'type' => 'select.select',
                    'label' => 'Mobile',
                    'description' => 'Enable or disable the fixed/sticky header on phone view.',
                    'placeholder' => 'Select...',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ]
            ]
        ]
    ]
];
