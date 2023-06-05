<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/plugins/shortcode-gallery-plusplus/blueprints.yaml',
    'modified' => 1681746678,
    'size' => 7955,
    'data' => [
        'name' => 'Shortcode Gallery++',
        'slug' => 'shortcode-gallery-plusplus',
        'type' => 'plugin',
        'version' => '1.6.0',
        'description' => 'A Shortcode extension to add sweet galleries with a lightbox to your Grav website.',
        'icon' => 'code',
        'author' => [
            'name' => 'Maximilian Salomon',
            'email' => 'msal.coding@gmail.com'
        ],
        'homepage' => 'https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus',
        'demo' => NULL,
        'keywords' => 'grav, plugin, shortcode, gallery, glightbox, justifiedgallery',
        'bugs' => 'https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus/issues',
        'docs' => 'https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.4'
            ],
            1 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gallery' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.GALLERY_SETTINGS',
                    'underline' => true,
                    'fields' => [
                        'gallery.rowHeight' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_ROW_HEIGHT',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_ROW_HEIGHT_HELP',
                            'type' => 'number',
                            'validate' => [
                                'min' => 0
                            ],
                            'size' => 'small'
                        ],
                        'gallery.margins' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_MARGINS',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_MARGINS_HELP',
                            'type' => 'number',
                            'validate' => [
                                'min' => 0
                            ],
                            'size' => 'small'
                        ],
                        'gallery.lastRow' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_LAST_ROW',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_LAST_ROW_HELP',
                            'type' => 'select',
                            'options' => [
                                'justify' => 'justify',
                                'nojustify' => 'nojustify',
                                'hide' => 'hide',
                                'center' => 'center',
                                'right' => 'right'
                            ],
                            'size' => 'small'
                        ],
                        'gallery.captions' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CAPTIONS',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CAPTIONS_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'gallery.border' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_BORDER',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_BORDER_HELP',
                            'type' => 'number',
                            'validate' => [
                                'min' => -1
                            ],
                            'size' => 'small'
                        ],
                        'gallery.resizeFactor' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_HELP',
                            'type' => 'select',
                            'default' => 2,
                            'options' => [
                                1 => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_1',
                                '1.5' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_1_5',
                                2 => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_2',
                                '2.5' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_2_5',
                                3 => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_RESIZE_FACTOR_3'
                            ],
                            'size' => 'medium'
                        ],
                        'gallery.removeTitle' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_REMOVE_TITLE',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_REMOVE_TITLE_HELP',
                            'type' => 'toggle',
                            'highlight' => 'false',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ]
                    ]
                ],
                'lightbox' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.LIGHTBOX_SETTINGS',
                    'underline' => true,
                    'fields' => [
                        'lightbox.openEffect' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_OPEN_EFFECT',
                            'type' => 'select',
                            'options' => [
                                'zoom' => 'zoom',
                                'fade' => 'fade',
                                'none' => 'none'
                            ],
                            'size' => 'small'
                        ],
                        'lightbox.closeEffect' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CLOSE_EFFECT',
                            'type' => 'select',
                            'options' => [
                                'zoom' => 'zoom',
                                'fade' => 'fade',
                                'none' => 'none'
                            ],
                            'size' => 'small'
                        ],
                        'lightbox.slideEffect' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_SLIDE_EFFECT',
                            'type' => 'select',
                            'options' => [
                                'slide' => 'slide',
                                'fade' => 'fade',
                                'zoom' => 'zoom',
                                'none' => 'none'
                            ],
                            'size' => 'small'
                        ],
                        'lightbox.closeButton' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CLOSE_BUTTON',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CLOSE_BUTTON_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.touchNavigation' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_TOUCH_NAVIGATION',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_TOUCH_NAVIGATION_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.touchFollowAxis' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_TOUCH_FOLLOW_AXIS',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_TOUCH_FOLLOW_AXIS_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.keyboardNavigation' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_KEYBOARD_NAVIGATION',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_KEYBOARD_NAVIGATION_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.closeOnOutsideClick' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CLOSE_ON_OUTSIDE_CLICK',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_CLOSE_ON_OUTSIDE_CLICK_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.loop' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_LOOP',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_LOOP_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.draggable' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DRAGGABLE',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DRAGGABLE_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.descEnabled' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_ENABLED',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_ENABLED_HELP',
                            'type' => 'toggle',
                            'highlight' => 'true',
                            'options' => [
                                'true' => 'PLUGIN_ADMIN.ENABLED',
                                'false' => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'lightbox.descPosition' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_POSITION',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_POSITION_HELP',
                            'type' => 'select',
                            'options' => [
                                'bottom' => 'bottom',
                                'top' => 'top',
                                'left' => 'left',
                                'right' => 'right'
                            ],
                            'size' => 'small'
                        ],
                        'lightbox.descMoreText' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_MORE_TEXT',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_MORE_TEXT_HELP',
                            'type' => 'text',
                            'size' => 'small'
                        ],
                        'lightbox.descMoreLength' => [
                            'label' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_MORE_LENGTH',
                            'help' => 'PLUGIN_SHORTCODE_GALLERY_PLUSPLUS.DEFAULT_DESC_MORE_LENGTH_HELP',
                            'type' => 'number',
                            'validate' => [
                                'min' => 0
                            ],
                            'size' => 'small'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
