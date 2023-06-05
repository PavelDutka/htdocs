<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/themes/main-theme/blueprints.yaml',
    'modified' => 1685299734,
    'size' => 778,
    'data' => [
        'name' => 'Main Theme',
        'slug' => 'main-theme',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'theme pro moje portfolio',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Pavel',
            'email' => 'pavel.dutka05@gmail.com'
        ],
        'homepage' => 'https://github.com/PavelDutka/grav-theme-main-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/PavelDutka/grav-theme-main-theme/issues',
        'readme' => 'https://github.com/PavelDutka/grav-theme-main-theme/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
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
