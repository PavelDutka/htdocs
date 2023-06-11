<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/plugins/swiper-js/blueprints.yaml',
    'modified' => 1651524212,
    'size' => 8987,
    'data' => [
        'name' => 'SwiperJS',
        'slug' => 'swiper-js',
        'type' => 'plugin',
        'version' => '1.1.3',
        'description' => 'SwiperJS implementation for Grav CMS',
        'icon' => 'ellipsis-h',
        'author' => [
            'name' => 'Karmalakas'
        ],
        'homepage' => 'https://github.com/Karmalakas/grav-plugin-swiper-js',
        'keywords' => 'grav, plugin, photos, slider, swiper, swiperjs, carousel',
        'bugs' => 'https://github.com/Karmalakas/grav-plugin-swiper-js/issues',
        'docs' => 'https://github.com/Karmalakas/grav-plugin-swiper-js/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.5'
            ]
        ],
        'form' => [
            'validation' => 'loose',
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
                'built_in_swiper_assets' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SWIPER_JS.USE_BUILT_IN_SWIPER_ASSETS.LABEL',
                    'help' => 'PLUGIN_SWIPER_JS.USE_BUILT_IN_SWIPER_ASSETS.HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SWIPER_JS.USE_BUILT_IN_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_js' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SWIPER_JS.USE_BUILT_IN_JS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'defaults' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_SWIPER_JS.DEFAULTS',
                    'underline' => true,
                    'fields' => [
                        'swiper.autoplay' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.AUTOPLAY',
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
                        'swiper.loop' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.LOOP',
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
                        'swiper.zoom' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.ZOOM',
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
                        'swiper.direction' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.DIRECTION.LABEL',
                            'default' => 0,
                            'options' => [
                                'vertical' => 'PLUGIN_SWIPER_JS.OPTIONS.DIRECTION.VERTICAL',
                                'horizontal' => 'PLUGIN_SWIPER_JS.OPTIONS.DIRECTION.HORIZONTAL'
                            ],
                            'validate.pattern' => '/[vertical|horizontal]/'
                        ],
                        'swiper.effect' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.LABEL',
                            'options' => [
                                'slide' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.SLIDE',
                                'fade' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.FADE',
                                'cube' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.CUBE',
                                'coverflow' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.COVER_FLOW',
                                'flip' => 'PLUGIN_SWIPER_JS.OPTIONS.EFFECT.FLIP'
                            ]
                        ],
                        'swiper.centeredSlides' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.CENTERED_SLIDES',
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
                        'swiper.navigation.nextEl' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.NAVIGATION.NEXT_EL',
                            'placeholder' => '.swiper-button-next',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.NAVIGATION.NEXT_EL_HELP'
                        ],
                        'swiper.navigation.prevEl' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.NAVIGATION.PREV_EL',
                            'placeholder' => '.swiper-button-prev',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.NAVIGATION.PREV_EL_HELP'
                        ],
                        'swiper.pagination.el' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.PAGINATION.EL',
                            'placeholder' => '.swiper-pagination',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.PAGINATION.EL_HELP'
                        ],
                        'swiper.scrollbar.el' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.SCROLLBAR.EL',
                            'placeholder' => '.swiper-scrollbar',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.SCROLLBAR.EL_HELP'
                        ],
                        'swiper.spaceBetween' => [
                            'type' => 'number',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.SPACE_BETWEEN.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.SPACE_BETWEEN.HELP',
                            'validate' => [
                                'min' => 0
                            ]
                        ],
                        'swiper.freeMode' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.FREE_MODE',
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
                        'swiper.freeModeSticky' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.FREE_MODE_STICKY.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.FREE_MODE_STICKY.HELP',
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
                        'swiper.grabCursor' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.GRAB_CURSOR.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.GRAB_CURSOR.HELP',
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
                        'swiper.autoHeight' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.AUTO_HEIGHT.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.AUTO_HEIGHT.HELP',
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
                        'swiper.initialSlide' => [
                            'type' => 'number',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.INITIAL_SLIDE'
                        ],
                        'swiper.preloadImages' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.PRELOAD_IMAGES.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.PRELOAD_IMAGES.HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'swiper.speed' => [
                            'type' => 'number',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.SPEED.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.SPEED.HELP'
                        ],
                        'swiper.shortSwipes' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.SHORT_SWIPES',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'swiper.keyboard.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.KEYBOARD.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.KEYBOARD.HELP',
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
                        'swiper.mousewheel' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.MOUSEWHEEL.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.MOUSEWHEEL.HELP',
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
                        'swiper.history' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.HISTORY.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.HISTORY.HELP',
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
                        'swiper.watchOverflow' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_OVERFLOW.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_OVERFLOW.HELP',
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
                        'swiper.watchSlidesProgress' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_SLIDES_PROGRESS.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_SLIDES_PROGRESS.HELP',
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
                        'swiper.watchSlidesVisibility' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_SLIDES_VISIBILITY.LABEL',
                            'help' => 'PLUGIN_SWIPER_JS.OPTIONS.WATCH_SLIDES_VISIBILITY.HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
