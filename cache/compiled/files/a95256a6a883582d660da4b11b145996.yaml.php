<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/gitter/blueprints.yaml',
    'modified' => 1487250599,
    'data' => [
        'name' => 'Gitter',
        'version' => '1.0.0',
        'description' => 'Add Gitter chat to your site',
        'icon' => 'comment',
        'author' => [
            'name' => 'Jerome Nadaud',
            'email' => 'jerome@nadaud.org',
            'url' => 'http://nadaud.org'
        ],
        'homepage' => 'https://github.com/jnadaud/grav-plugin-gitter',
        'keywords' => 'git, gitter, plugin',
        'bugs' => 'https://github.com/jnadaud/grav-plugin-gitter',
        'readme' => 'https://github.com/jnadaud/grav-plugin-gitter/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'channel' => [
                    'type' => 'text',
                    'label' => 'Gitter channel',
                    'size' => 'medium',
                    'placeholder' => 'Your Gitter channel'
                ]
            ]
        ]
    ]
];
