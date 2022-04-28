<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/particles/jlvideobackground.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'JL Video Background',
        'description' => 'This atom help you use play a Youtube movie as background of your page or of an element of your page.',
        'type' => 'atom',
        'icon' => 'fa-video',
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
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create a list of items.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.element' => [
                            'type' => 'input.text',
                            'label' => 'Element ID',
                            'description' => 'Enter your unique section/element id to display the video as background.',
                            'placeholder' => 'g-showcase'
                        ],
                        '.url' => [
                            'type' => 'input.text',
                            'label' => 'URL',
                            'description' => 'Enter the Youtube URL of the page containing the video, the short URL or the video <b>ID</b>. https://www.youtube.com/watch?v=<b>ID</b>. Example, <b>ID</b> of https://www.youtube.com/watch?v=<b>bMv_4enya6E</b>, so the video id is <b>bMv_4enya6E</v>'
                        ],
                        '.mute' => [
                            'type' => 'input.checkbox',
                            'label' => 'Mute',
                            'description' => 'Mute the audio.',
                            'default' => true
                        ],
                        '.vol' => [
                            'type' => 'input.number',
                            'label' => 'Volume',
                            'min' => 1,
                            'max' => 100,
                            'description' => 'Set the volume level of the video (1 to 100).',
                            'default' => 80
                        ],
                        '.start' => [
                            'type' => 'input.number',
                            'label' => 'Start at',
                            'description' => 'Set the seconds the video should start at.',
                            'default' => 0
                        ],
                        '.addraster' => [
                            'type' => 'input.checkbox',
                            'label' => 'Add Raster',
                            'description' => 'Show or hide a raster image over the video.',
                            'default' => false
                        ],
                        '.controls' => [
                            'type' => 'input.checkbox',
                            'label' => 'Show Controls',
                            'description' => 'Show or hide the player controls.',
                            'default' => false
                        ],
                        '.autoplay' => [
                            'type' => 'input.checkbox',
                            'label' => 'Autoplay',
                            'description' => 'Auto play the video once ready.',
                            'default' => true
                        ],
                        '.loop' => [
                            'type' => 'input.checkbox',
                            'label' => 'Loop',
                            'default' => true
                        ],
                        '.optimizedisplay' => [
                            'type' => 'input.checkbox',
                            'label' => 'Optimize Display',
                            'description' => 'Fit the video size into the window size optimizing the view.',
                            'default' => true
                        ],
                        '.logo' => [
                            'type' => 'input.checkbox',
                            'label' => 'Show Youtube logo',
                            'description' => 'Show the YT logo and the link to the original video URL.',
                            'default' => false
                        ],
                        '.stopvideo' => [
                            'type' => 'input.checkbox',
                            'label' => 'Pause video',
                            'description' => 'Pause the video when the window loose focus.',
                            'default' => true
                        ],
                        '.ratio' => [
                            'type' => 'select.select',
                            'label' => 'Ratio',
                            'description' => 'Select the aspect ratio of the movie.',
                            'default' => 'auto',
                            'options' => [
                                'auto' => 'Auto',
                                '4/3' => '4/3',
                                '16/9' => '16/9'
                            ]
                        ],
                        '.opacity' => [
                            'type' => 'input.text',
                            'label' => 'Opacity',
                            'description' => 'Define the opacity of the video (0 to 1).',
                            'pattern' => '\\d+(\\.\\d+){0,1}',
                            'default' => 1
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'Video Background <strong>Version: 2.2.0</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/video-background-atom-documentation/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
