<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_zmagazine_free/custom/config/default/layout.yaml',
    'modified' => 1650510305,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/home.png',
            'name' => 'default',
            'timestamp' => 1650510305
        ],
        'layout' => [
            '/top/' => [
                0 => [
                    0 => 'spacer-8571 55',
                    1 => 'social-1801 30',
                    2 => 'date-3305 15'
                ]
            ],
            '/header/' => [
                0 => [
                    0 => 'logo-3791 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-4194'
                ]
            ],
            '/breaking/' => [
                
            ],
            '/showcase/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/main/' => [
                0 => [
                    0 => 'system-messages-9387'
                ],
                1 => [
                    0 => 'system-content-2545'
                ]
            ],
            '/subfeature/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-5965 40',
                    1 => 'spacer-6492 20',
                    2 => 'horizontalmenu-3475 40'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-4245'
                ]
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'breaking' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'subfeature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'flush section-horizontal-paddings'
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ]
        ],
        'content' => [
            'social-1801' => [
                'attributes' => [
                    'items' => [
                        0 => [
                            'icon' => 'fa fa-facebook',
                            'text' => '',
                            'link' => '#',
                            'name' => 'Facebook'
                        ],
                        1 => [
                            'icon' => 'fa fa-google-plus',
                            'text' => '',
                            'link' => '#',
                            'name' => 'Google plus'
                        ],
                        2 => [
                            'icon' => 'fa fa-twitter',
                            'text' => '',
                            'link' => '#',
                            'name' => 'Twitter'
                        ],
                        3 => [
                            'icon' => 'fa fa-pinterest-square',
                            'text' => '',
                            'link' => '#',
                            'name' => 'Pinterest'
                        ],
                        4 => [
                            'icon' => 'fa fa-rss',
                            'text' => '',
                            'link' => '#',
                            'name' => 'Rss'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'date-3305' => [
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'logo-3791' => [
                'attributes' => [
                    'image' => 'gantry-media://logo.png',
                    'svg' => '',
                    'text' => 'Joomla News Magazine Template'
                ]
            ],
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
                ],
                'block' => [
                    'class' => 'custom-padding'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ],
            'copyright-5965' => [
                'attributes' => [
                    'owner' => 'Your Company. All Rights Reserved.'
                ],
                'block' => [
                    'class' => 'copyright'
                ]
            ],
            'horizontalmenu-3475' => [
                'title' => 'Horizontal Menu',
                'attributes' => [
                    'class' => 'copyright-bottom',
                    'items' => [
                        0 => [
                            'text' => 'Home',
                            'link' => '#',
                            'name' => 'Home'
                        ],
                        1 => [
                            'text' => 'Feature',
                            'link' => '#',
                            'name' => 'Feature'
                        ],
                        2 => [
                            'text' => 'Shortcodes',
                            'link' => '#',
                            'name' => 'Shortcodes'
                        ],
                        3 => [
                            'text' => 'About',
                            'link' => '#',
                            'name' => 'About'
                        ],
                        4 => [
                            'text' => 'Contact',
                            'link' => '#',
                            'name' => 'Contact'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'copyright',
                    'variations' => 'align-right'
                ]
            ]
        ]
    ]
];
