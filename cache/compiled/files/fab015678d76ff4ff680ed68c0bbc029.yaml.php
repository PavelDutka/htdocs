<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/plugins/flex-objects/blueprints/pages/flex-objects.yaml',
    'modified' => 1683837167,
    'size' => 445,
    'data' => [
        'title' => 'Flex Directory',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.flex.directory' => [
                                    'ordering@' => 2,
                                    'type' => 'select',
                                    'label' => 'Flex Directory',
                                    'style' => 'vertical',
                                    'data-options@' => 'Grav\\Plugin\\FlexObjectsPlugin::directoryOptions',
                                    'options' => [
                                        '' => 'Directory List'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
