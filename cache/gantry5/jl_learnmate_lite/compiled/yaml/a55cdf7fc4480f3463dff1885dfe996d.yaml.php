<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/particles/jlinfobar.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'JL Infobar',
        'description' => 'Create quick contact info that fade out automatically.',
        'type' => 'atom',
        'icon' => 'fa-list',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'items' => [
                    'overrideable' => false,
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'default' => 'far fa-envelope'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip title',
                            'description' => 'Customize the tooltip title.',
                            'placeholder' => 'hello@example.com'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Specify the link.',
                            'placeholder' => 'http://'
                        ],
                        '.link_target' => [
                            'type' => 'select.selectize',
                            'label' => 'Target',
                            'description' => 'Open the link in a same or new window or modal.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window',
                                '_lightbox' => 'Modal'
                            ]
                        ],
                        '.item_class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'Specify the CSS class name for item.'
                        ]
                    ]
                ],
                'note_settings' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Behavior'
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Mode',
                    'description' => 'Display the popover on click or hover.',
                    'default' => 'hover',
                    'options' => [
                        'hover' => 'Hover',
                        'click' => 'Click'
                    ]
                ],
                'subnav_settings' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Style'
                ],
                'background_color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background'
                ],
                'icon_color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Infobar <strong>Version: 1.0.3</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/contact-info-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
