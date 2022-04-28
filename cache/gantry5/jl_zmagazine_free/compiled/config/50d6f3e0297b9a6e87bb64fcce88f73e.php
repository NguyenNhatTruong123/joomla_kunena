<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1650510327,
    'checksum' => '2fc64d64490ca79ba25aa10ad95ea75d',
    'files' => [
        'templates/jl_zmagazine_free/custom/config/default' => [
            'index' => [
                'file' => 'templates/jl_zmagazine_free/custom/config/default/index.yaml',
                'modified' => 1650510305
            ],
            'layout' => [
                'file' => 'templates/jl_zmagazine_free/custom/config/default/layout.yaml',
                'modified' => 1650510305
            ]
        ],
        'templates/jl_zmagazine_free/config/default' => [
            'page' => [
                'file' => 'templates/jl_zmagazine_free/config/default/page.yaml',
                'modified' => 1650510305
            ],
            'page/assets' => [
                'file' => 'templates/jl_zmagazine_free/config/default/page/assets.yaml',
                'modified' => 1650510305
            ],
            'page/body' => [
                'file' => 'templates/jl_zmagazine_free/config/default/page/body.yaml',
                'modified' => 1650510305
            ],
            'page/head' => [
                'file' => 'templates/jl_zmagazine_free/config/default/page/head.yaml',
                'modified' => 1650510305
            ],
            'particles/logo' => [
                'file' => 'templates/jl_zmagazine_free/config/default/particles/logo.yaml',
                'modified' => 1650510305
            ],
            'styles' => [
                'file' => 'templates/jl_zmagazine_free/config/default/styles.yaml',
                'modified' => 1650510305
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'contentcubes' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'contenttabs' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'animation' => 'slide'
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'target' => '_blank'
            ],
            'horizontalmenu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'target' => '_blank'
            ],
            'owlcarousel' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'nav' => 'disable',
                'dots' => 'enable',
                'autoplay' => 'disable',
                'imageOverlay' => 'enable'
            ],
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/logo.png',
                'text' => 'Zmagazine',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'backtotop' => [
                'enabled' => true,
                'icon' => 'fa fa-angle-double-up'
            ],
            'sticky' => [
                'enabled' => true,
                'spacing' => 0
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '3'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => 1,
                'version' => 'fa4',
                'fa4_compatibility' => 1,
                'content_compatibility' => 1
            ],
            'assets' => [
                'favicon' => 'gantry-media://favicon.ico',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'id' => 'sticky-2321',
                        'type' => 'sticky',
                        'title' => 'Sticky',
                        'attributes' => [
                            'enabled' => '1',
                            'id' => 'g-navigation',
                            'spacing' => '0'
                        ]
                    ],
                    1 => [
                        'id' => 'backtotop-3777',
                        'type' => 'backtotop',
                        'title' => 'Back To Top',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                'class' => ''
                            ],
                            'icon' => 'fa fa-angle-up'
                        ]
                    ],
                    2 => [
                        'id' => 'assets-2072',
                        'type' => 'assets',
                        'title' => 'Custom CSS / JS',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                
                            ],
                            'javascript' => [
                                0 => [
                                    'location' => 'gantry-assets://js/theme.js',
                                    'inline' => '',
                                    'in_footer' => '0',
                                    'extra' => [
                                        
                                    ],
                                    'priority' => '0',
                                    'name' => 'Theme Js'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#00c8ff',
                'color-2' => '#f04d33',
                'color-3' => '#2f2f2f'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'bottom' => [
                'background' => '#2f2f2f',
                'text-color' => '#c1c1c1'
            ],
            'breaking' => [
                'background' => '#f3f3f3',
                'text-color' => '#3b5265',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '51rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '51rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#2a2a2a',
                'text-color' => '#c1c1c1'
            ],
            'header' => [
                'background' => '#ffffff',
                'text-color' => '#3b5265'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#f04d33',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#696969',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#ffffff',
                'image' => '',
                'text-color' => '#354d59'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'top' => [
                'background' => '#2f2f2f',
                'text-color' => '#c1c1c1'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 1650510305,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'default',
                'timestamp' => 1650510305
            ],
            'positions' => [
                'header' => 'Header',
                'footer' => 'Footer'
            ],
            'sections' => [
                'top' => 'Top',
                'navigation' => 'Navigation',
                'breaking' => 'Breaking',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'bottom' => 'Bottom',
                'header' => 'Header',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'spacer' => [
                    'spacer-8571' => 'Spacer',
                    'spacer-6492' => 'Spacer'
                ],
                'social' => [
                    'social-1801' => 'Social'
                ],
                'date' => [
                    'date-3305' => 'Date'
                ],
                'logo' => [
                    'logo-3791' => 'Logo'
                ],
                'position' => [
                    'position-header' => 'Header',
                    'position-footer' => 'Footer'
                ],
                'menu' => [
                    'menu-4194' => 'Menu'
                ],
                'messages' => [
                    'system-messages-9387' => 'System Messages'
                ],
                'content' => [
                    'system-content-2545' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-5965' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-3475' => 'Horizontal Menu'
                ],
                'mobile-menu' => [
                    'mobile-menu-4245' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
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
    ]
];
