<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_zmagazine_free/blueprints/styles/footer.yaml',
    'modified' => 1650510305,
    'data' => [
        'name' => 'Footer Colors',
        'description' => 'Footer colors for the Zmagazine theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#2a2a2a'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#c1c1c1'
                ]
            ]
        ]
    ]
];
