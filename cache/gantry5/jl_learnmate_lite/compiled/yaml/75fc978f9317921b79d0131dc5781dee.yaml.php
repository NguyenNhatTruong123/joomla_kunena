<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/blueprints/styles/base.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#464646'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#f7f7f7'
                ],
                'heading-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Heading Color',
                    'default' => '#464646'
                ]
            ]
        ]
    ]
];
