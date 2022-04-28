<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/blueprints/styles/footer.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#292929'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#ffffff'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link Color',
                    'default' => 'rgba(255, 255, 255, 0.8)'
                ],
                'link-hover-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link Hover Color',
                    'default' => 'rgba(255, 255, 255, 0.8)'
                ]
            ]
        ]
    ]
];
