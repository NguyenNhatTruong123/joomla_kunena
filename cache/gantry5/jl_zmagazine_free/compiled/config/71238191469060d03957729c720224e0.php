<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1650510334,
    'checksum' => '607fb5eb1d0f7eeb36064e32efd41b0a',
    'files' => [
        'templates/jl_zmagazine_free/custom/config/18' => [
            'index' => [
                'file' => 'templates/jl_zmagazine_free/custom/config/18/index.yaml',
                'modified' => 1650510305
            ],
            'layout' => [
                'file' => 'templates/jl_zmagazine_free/custom/config/18/layout.yaml',
                'modified' => 1650510305
            ]
        ],
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
            'name' => 18,
            'timestamp' => 1650510305,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
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
                'world' => 'World',
                'sidebar' => 'Sidebar',
                'subfeature' => 'Subfeature',
                'bottom' => 'Bottom',
                'header' => 'Header',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'spacer' => [
                    'spacer-6802' => 'Spacer',
                    'spacer-8379' => 'Spacer'
                ],
                'social' => [
                    'social-9664' => 'Social'
                ],
                'date' => [
                    'date-4026' => 'Date'
                ],
                'logo' => [
                    'logo-9316' => 'Logo'
                ],
                'position' => [
                    'position-position-1112' => 'Header',
                    'position-position-2771' => 'Footer'
                ],
                'menu' => [
                    'menu-1366' => 'Menu'
                ],
                'messages' => [
                    'system-messages-3329' => 'System Messages'
                ],
                'content' => [
                    'system-content-2940' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-5759' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-4508' => 'Horizontal Menu'
                ],
                'mobile-menu' => [
                    'mobile-menu-3634' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'top' => 'top',
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'breaking' => 'breaking',
                    'showcase' => 'showcase',
                    'feature' => 'feature',
                    'main' => 'main',
                    'subfeature' => 'subfeature',
                    'bottom' => 'bottom',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'spacer-6802' => 'spacer-1479',
                    'social-9664' => 'social-8979',
                    'date-4026' => 'date-3013',
                    'logo-9316' => 'logo-9944',
                    'position-position-1112' => 'position-position-8232',
                    'menu-1366' => 'menu-4747',
                    'system-messages-3329' => 'system-messages-7683',
                    'system-content-2940' => 'system-content-3393',
                    'position-position-2771' => 'position-position-8945',
                    'copyright-5759' => 'copyright-5095',
                    'spacer-8379' => 'spacer-8473',
                    'horizontalmenu-4508' => 'horizontalmenu-4989',
                    'mobile-menu-3634' => 'mobile-menu-3987'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1650510305
            ],
            'layout' => [
                'top' => [
                    
                ],
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'breaking' => [
                    
                ],
                'showcase' => [
                    
                ],
                'feature' => [
                    
                ],
                '/container-world/' => [
                    0 => [
                        0 => [
                            '/world/ 80' => [
                                
                            ]
                        ],
                        1 => [
                            'sidebar 20' => [
                                
                            ]
                        ]
                    ]
                ],
                'main' => [
                    
                ],
                'subfeature' => [
                    
                ],
                'bottom' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'top' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'breaking' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'world' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'sidebar' => [
                    'type' => 'section'
                ],
                'container-world' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings',
                        'extra' => [
                            
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
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
