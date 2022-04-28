<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/joomla/templates/jl_learnmate_lite/blueprints/styles/font.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Heebo, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'IBM Plex Sans, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
