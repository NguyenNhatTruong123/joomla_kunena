<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/particles/jlblockreveal.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'JL Block Reveal',
        'description' => 'Ideas for revealing content in a schematic box look as seen around the Web lately.',
        'type' => 'atom',
        'icon' => 'fa-columns',
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
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'items' => [
                    'overridable' => false,
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.cssid' => [
                            'type' => 'input.text',
                            'label' => 'Css ID',
                            'description' => 'Customize the css id for block reveal effect.',
                            'placeholder' => 'css-id'
                        ],
                        '.bgcolor' => [
                            'type' => 'input.colorpicker',
                            'label' => 'Background Color',
                            'description' => 'Customize the background color.'
                        ],
                        '.duration' => [
                            'type' => 'input.number',
                            'label' => 'Duration',
                            'description' => 'Customize the duration animation.',
                            'placeholder' => 200
                        ],
                        '.easing' => [
                            'type' => 'select.select',
                            'label' => 'Easing',
                            'description' => 'Select Easing functions.',
                            'default' => 'easeInOutCirc',
                            'options' => [
                                'easeInOutCirc' => 'easeInOutCirc',
                                'easeInOutElastic' => 'easeInOutElastic',
                                'easeInOutExpo' => 'easeInOutExpo',
                                'easeInOutSine' => 'easeInOutSine',
                                'easeInOutQuint' => 'easeInOutQuint',
                                'easeInOutQuart' => 'easeInOutQuart',
                                'easeInOutCubic' => 'easeInOutCubic',
                                'easeInOutQuad' => 'easeInOutQuad',
                                'easeOutElastic' => 'easeOutElastic',
                                'easeOutBack' => 'easeOutBack',
                                'easeOutCirc' => 'easeOutCirc',
                                'easeOutExpo' => 'easeOutExpo',
                                'easeOutSine' => 'easeOutSine',
                                'easeOutQuint' => 'easeOutQuint',
                                'easeOutQuart' => 'easeOutQuart',
                                'easeOutCubic' => 'easeOutCubic',
                                'easeOutQuad' => 'easeOutQuad',
                                'easeInQuad' => 'easeInQuad',
                                'easeInCubic' => 'easeInCubic',
                                'easeInQuart' => 'easeInQuart',
                                'easeInQuint' => 'easeInQuint',
                                'easeInSine' => 'easeInSine',
                                'easeInExpo' => 'easeInExpo',
                                'easeInCirc' => 'easeInCirc',
                                'easeInBack' => 'easeInBack',
                                'easeInElastic' => 'easeInElastic'
                            ]
                        ],
                        '.direction' => [
                            'type' => 'select.select',
                            'label' => 'Direction',
                            'description' => 'Select animation direction functions.',
                            'default' => 'lr',
                            'options' => [
                                'lr' => 'Left to Right',
                                'rl' => 'Right to Left',
                                'bt' => 'Bottom to Top',
                                'tb' => 'Top to Bottom'
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Block Reveal <strong>Version: 2.2.0</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/block-reveal/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
