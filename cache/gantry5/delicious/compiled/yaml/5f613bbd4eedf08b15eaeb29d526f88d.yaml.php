<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\ishara/templates/delicious/particles/googlemap.yaml',
    'modified' => 1562649532,
    'data' => [
        'name' => 'Google Map',
        'description' => 'Display a Google Map.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Google Map particles.',
                    'default' => true
                ],
                'apikey' => [
                    'type' => 'input.text',
                    'label' => 'Google Map API Key',
                    'description' => 'If you are using the Google Maps API on localhost or your domain was not active prior to June 22nd 2016, the Map will require a key in order to work.'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Map Width',
                    'description' => 'Set the map width in pixels or percentage. Default is \'100%\'.',
                    'default' => '100%'
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Map Height',
                    'description' => 'Set the map height in pixels. Default is \'500px\'.',
                    'default' => '500px'
                ],
                'maptype' => [
                    'type' => 'select.select',
                    'label' => 'Map Type',
                    'description' => 'Select the map type.',
                    'placeholder' => 'Select...',
                    'default' => 'ROADMAP',
                    'options' => [
                        'ROADMAP' => 'Roadmap',
                        'SATELLITE' => 'Satellite',
                        'HYBRID' => 'Hybrid',
                        'TERRAIN' => 'Terrain'
                    ]
                ],
                'latitude' => [
                    'type' => 'input.text',
                    'label' => 'Latitude',
                    'description' => 'Enter the latitude of the location.',
                    'default' => 52.052312
                ],
                'longitude' => [
                    'type' => 'input.text',
                    'label' => 'Longitude',
                    'description' => 'Enter the longitude of the location.',
                    'default' => 4.447141
                ],
                'zoom' => [
                    'type' => 'input.text',
                    'label' => 'Zoom',
                    'description' => 'Set the zoom level of the map. Should be a number between 0 and 22.',
                    'default' => 7
                ],
                'markertext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Info Window',
                    'description' => 'Type in the text for the marker info window.',
                    'default' => NULL
                ],
                'markerstate' => [
                    'type' => 'select.select',
                    'label' => 'Info Window onLoad',
                    'description' => 'Select the default info window state when the page is loaded.',
                    'placeholder' => 'Select...',
                    'default' => 1,
                    'options' => [
                        1 => 'Show',
                        0 => 'Hide'
                    ]
                ],
                'scrollwheel' => [
                    'type' => 'select.select',
                    'label' => 'Scrollwheel',
                    'description' => 'Enable or disable the scrollwheel map zooming. It is disabled by default.',
                    'placeholder' => 'Select...',
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ]
                ],
                'markers' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Additional Markers',
                    'description' => 'Create additional markers.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.latitude' => [
                            'type' => 'input.text',
                            'label' => 'Latitude',
                            'description' => 'Enter the latitude of the location.'
                        ],
                        '.longitude' => [
                            'type' => 'input.text',
                            'label' => 'Longitude',
                            'description' => 'Enter the longitude of the location.'
                        ],
                        '.markertext' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Marker Text',
                            'description' => 'Type in the marker text.',
                            'default' => NULL
                        ],
                        '.markerstate' => [
                            'type' => 'select.select',
                            'label' => 'Info Window onLoad',
                            'description' => 'Select the default info window state when the page is loaded.',
                            'placeholder' => 'Select...',
                            'default' => 1,
                            'options' => [
                                1 => 'Show',
                                0 => 'Hide'
                            ]
                        ]
                    ]
                ],
                'snazzymaps' => [
                    'type' => 'textarea.textarea',
                    'label' => 'SnazzyMaps Style',
                    'description' => 'Paste the code snippet that you have copied from SnazzyMaps.com.'
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
                ]
            ]
        ]
    ]
];
