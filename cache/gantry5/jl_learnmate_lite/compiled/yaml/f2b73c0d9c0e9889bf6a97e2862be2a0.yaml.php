<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/joomla/templates/jl_learnmate_lite/common/engine/blueprints/page/body.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Body Attributes',
        'description' => 'Settings that can be applied to the page.',
        'type' => 'global',
        'form' => [
            'fields' => [
                'attribs.id' => [
                    'type' => 'input.text',
                    'label' => 'Body Id',
                    'default' => NULL
                ],
                'attribs.class' => [
                    'type' => 'input.selectize',
                    'label' => 'Body Classes',
                    'default' => 'gantry'
                ],
                'attribs.extra' => [
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
                'layout.sections' => [
                    'type' => 'select.selectize',
                    'label' => 'Sections Layout',
                    'description' => 'Default layout container behavior for Sections',
                    'default' => 0,
                    'options' => [
                        0 => 'Full Width',
                        1 => 'Boxed',
                        2 => 'Remove Container'
                    ]
                ],
                'layout.maxwidth' => [
                    'type' => 'select.selectize',
                    'label' => 'Max Width',
                    'description' => 'Set the maximum content width.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'isset' => true,
                    'options' => [
                        0 => 'Default',
                        1 => 'Small',
                        2 => 'Large',
                        3 => 'Xlarge',
                        4 => 'Expand'
                    ]
                ],
                'body_top' => [
                    'type' => 'textarea.textarea',
                    'label' => 'After <body>',
                    'description' => 'Anything in this field will be appended right after the opening body tag'
                ],
                'body_bottom' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Before </body>',
                    'description' => 'Anything in this field will be appended right before the closing body tag'
                ]
            ]
        ]
    ]
];
