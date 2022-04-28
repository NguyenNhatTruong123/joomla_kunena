<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/section.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Section',
        'description' => 'Layout section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'boxed' => [
                    'type' => 'select.selectize',
                    'label' => 'Layout',
                    'description' => 'Select the Layout container behavior. \'Inherit\' refers to Page Settings.',
                    'isset' => true,
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'Inherit from Page Settings',
                        0 => 'Full Width',
                        1 => 'Boxed',
                        2 => 'Remove Container'
                    ]
                ],
                'maxwidth' => [
                    'type' => 'select.selectize',
                    'label' => 'Max Width',
                    'description' => 'Set the maximum section width.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'isset' => true,
                    'options' => [
                        '' => 'Inherit from Page Settings',
                        0 => 'Default',
                        1 => 'Small',
                        2 => 'Large',
                        3 => 'Xlarge',
                        4 => 'Expand'
                    ]
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ],
                'variations' => [
                    'type' => 'input.section-variations',
                    'label' => 'Variations',
                    'description' => 'Enter Section Variations.',
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
                '_inherit' => [
                    'type' => 'gantry.inherit'
                ]
            ]
        ]
    ]
];
