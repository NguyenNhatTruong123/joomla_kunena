<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\joomla/templates/jl_learnmate_lite/particles/jlcontactinfo.yaml',
    'modified' => 1650508408,
    'data' => [
        'name' => 'JL Contact Info',
        'description' => 'Display a horizontal contact info navigation.',
        'type' => 'particle',
        'icon' => 'fa-list',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_content' => [
                            'label' => 'Content',
                            'fields' => [
                                'items' => [
                                    'overrideable' => false,
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Items',
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'input.icon',
                                            'label' => 'Icon',
                                            'default' => 'far fa-envelope'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Customize the title.',
                                            'placeholder' => 'hello@example.com'
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'description' => 'Specify the link.',
                                            'placeholder' => 'http://'
                                        ],
                                        '.link_target' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Target',
                                            'description' => 'Open the link in a same or new window.',
                                            'placeholder' => 'Select...',
                                            'default' => '_self',
                                            'options' => [
                                                '_self' => 'Self',
                                                '_blank' => 'New Window'
                                            ]
                                        ],
                                        '.item_class' => [
                                            'type' => 'input.selectize',
                                            'label' => 'CSS Classes',
                                            'description' => 'Specify the CSS class name for item.'
                                        ]
                                    ]
                                ],
                                'contact_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Contact Style',
                                    'description' => 'Select the layout style for contact info, grid or subnav style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Grid',
                                        'subnav' => 'Subnav'
                                    ]
                                ],
                                'grid_column_gap' => [
                                    'type' => 'select.select',
                                    'label' => 'Column Gap',
                                    'description' => 'Set the size of the gap between the grid columns.',
                                    'default' => 'small',
                                    'options' => [
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'default' => 'Default',
                                        'large' => 'Large',
                                        'collapse' => 'None'
                                    ]
                                ],
                                'subnav_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Subnav Settings'
                                ],
                                'subnav_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Select the Subnav style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'divider' => 'Divider',
                                        'pill' => 'Pill'
                                    ]
                                ],
                                'title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color'
                                ],
                                'title_link_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Link Color'
                                ],
                                'title_link_hover_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Link Hover Color'
                                ],
                                'title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the title font size.',
                                    'default' => 15
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_general' => [
                            'label' => 'General',
                            'overridable' => false,
                            'fields' => [
                                'particle_title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Particle Title Style'
                                ],
                                'particle_title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Add an optional particle title.',
                                    'placeholder' => 'Enter particle title'
                                ],
                                'particle_title_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
                                    'default' => 'h3',
                                    'options' => [
                                        'default' => 'None',
                                        'heading-2xlarge' => '2X-Large',
                                        'heading-xlarge' => 'X-Large',
                                        'heading-large' => 'Large',
                                        'heading-medium' => 'Medium',
                                        'heading-small' => 'Small',
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6',
                                        'text-lead' => 'Lead',
                                        'text-meta' => 'Meta'
                                    ]
                                ],
                                'particle_title_decoration' => [
                                    'type' => 'select.select',
                                    'label' => 'Decoration',
                                    'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'divider' => 'Divider',
                                        'bullet' => 'Bullet',
                                        'line' => 'Line'
                                    ]
                                ],
                                'particle_title_align' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Center, left and right alignment for Particle title.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'particle_predefined_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger'
                                    ]
                                ],
                                'particle_title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the title color instead using predefined color mode. Set the Predefined color to None before using this color customization mode.'
                                ],
                                'particle_title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the particle title font size.',
                                    'min' => 0
                                ],
                                'particle_title_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'particle_title_font_weight' => [
                                    'type' => 'select.select',
                                    'label' => 'Font weight',
                                    'description' => 'Add one of the following classes to modify the font weight of your text.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'light' => 'Light',
                                        'normal' => 'Normal',
                                        'bold' => 'Bold',
                                        'lighter' => 'Lighter',
                                        'bolder' => 'Bolder'
                                    ]
                                ],
                                'particle_title_element' => [
                                    'type' => 'select.select',
                                    'label' => 'HTML Element',
                                    'description' => 'Choose one of the elements to fit your semantic structure.',
                                    'default' => 'h3',
                                    'options' => [
                                        'h1' => 'h1',
                                        'h2' => 'h2',
                                        'h3' => 'h3',
                                        'h4' => 'h4',
                                        'h5' => 'h5',
                                        'h6' => 'h6',
                                        'div' => 'div'
                                    ]
                                ],
                                'general_content_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'General Particle Settings'
                                ],
                                'align' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Alignment',
                                    'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Breakpoint',
                                    'description' => 'Define the device width from which the alignment will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'fallback' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Fallback',
                                    'description' => 'Define an alignment fallback for device widths below the breakpoint.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'g_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        '2xlarge' => '2X-Large'
                                    ]
                                ],
                                'g_maxwidth_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Alignment',
                                    'description' => 'Define the alignment in case the container exceeds the element\'s max-width.',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'g_maxwidth_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Breakpoint',
                                    'description' => 'Define the device width from which the element\'s max-width will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin',
                                    'description' => 'Set the vertical margin.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Keep existing',
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove-vertical' => 'None'
                                    ]
                                ],
                                'visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Visibility',
                                    'description' => 'Display the element only on this device width and larger.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Always',
                                        's' => 'Visible Small (Phone Landscape)',
                                        'm' => 'Visible Medium (Tablet Landscape)',
                                        'l' => 'Visible Large (Desktop)',
                                        'xl' => 'Visible X-Large (Large Screens)',
                                        'hidden-s' => 'Hidden Small (Phone Landscape)',
                                        'hidden-m' => 'Hidden Medium (Tablet Landscape)',
                                        'hidden-l' => 'Hidden Large (Desktop)',
                                        'hidden-xl' => 'Hidden X-Large (Large Screens)'
                                    ]
                                ],
                                'general_animation_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Animation Settings'
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Apply an animation to particles once they enter the viewport. This will animate all particles inside the section.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'animation_delay' => [
                                    'type' => 'input.number',
                                    'label' => 'Animation Delay',
                                    'description' => 'Set the delay animations for particle. Delay time in ms.',
                                    'min' => 0,
                                    'placeholder' => 200
                                ],
                                'animation_repeat' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation Repeat',
                                    'description' => 'Repeat an animation to particle once it enter the viewport.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Contact Info <strong>Version: 2.2.0</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/contact-info-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
