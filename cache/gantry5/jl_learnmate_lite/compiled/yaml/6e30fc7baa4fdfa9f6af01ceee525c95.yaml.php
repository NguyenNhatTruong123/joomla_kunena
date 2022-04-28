<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/blueprints/styles/menustyle.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Menu Styles',
        'description' => 'Set menu style options.',
        'type' => 'core',
        'form' => [
            'fields' => [
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_toplevel' => [
                            'label' => 'Top Level',
                            'fields' => [
                                'text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#182333'
                                ],
                                'text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#182333'
                                ],
                                'background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Background',
                                    'default' => '#0278ae'
                                ],
                                'item-height' => [
                                    'type' => 'input.text',
                                    'label' => 'Line Height',
                                    'description' => 'Specify the default height of menu items.',
                                    'default' => '60px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(px)'
                                ]
                            ]
                        ],
                        '_tab_sublevel' => [
                            'label' => 'Sub Level',
                            'fields' => [
                                'sublevel-background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Dropdown',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#999999'
                                ],
                                'sublevel-text-color-hover' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Color',
                                    'default' => '#333333'
                                ],
                                'sublevel-text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Color',
                                    'default' => '#333333'
                                ],
                                'sub-background-hover' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Background',
                                    'default' => '#0278ae'
                                ],
                                'sub-background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Background',
                                    'default' => '#0278ae'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
