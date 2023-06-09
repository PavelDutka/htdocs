<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/plugins/swiper/blueprints.yaml',
    'modified' => 1576930720,
    'size' => 1081,
    'data' => [
        'name' => 'Swiper',
        'version' => '1.0.0',
        'description' => 'Swiper for Grav CMS',
        'icon' => 'plug',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.net'
        ],
        'homepage' => 'https://github.com/OleVik/grav-plugin-swiper',
        'demo' => 'https://swiperjs.com/demos/',
        'keywords' => 'grav, plugin, swiper, slider, gallery',
        'bugs' => 'https://github.com/OleVik/grav-plugin-swiper/issues',
        'docs' => 'https://github.com/OleVik/grav-plugin-swiper/blob/develop/README.md',
        'license' => 'MIT',
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
                'templates' => [
                    'type' => 'toggle',
                    'label' => 'Templates',
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
                'shortcodes' => [
                    'type' => 'toggle',
                    'label' => 'Shortcodes',
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
];
