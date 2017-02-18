<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/datetools/blueprints.yaml',
    'modified' => 1487307608,
    'data' => [
        'name' => 'Date Tools',
        'version' => '1.0.6',
        'description' => 'This plugin provides date tools to twig inside of Grav CMS using the [Carbon](https://github.com/briannesbitt/Carbon) DateTime api extension.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Kaleb Heitzman',
            'email' => 'kalebheitzman@gmail.com',
            'url' => 'http://brandr.co'
        ],
        'homepage' => 'http://github.com/kalebheitzman/grav-plugin-datetools',
        'docs' => 'https://github.com/kalebheitzman/grav-plugin-datetools#date-tools-plugin-for-grav-cms',
        'keywords' => 'events, plugin',
        'bugs' => 'https://github.com/kalebheitzman/grav-plugin-datetools/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dateFormat' => [
                    'type' => 'Section',
                    'title' => 'Date Formats',
                    'fields' => [
                        'dateFormat.default' => [
                            'type' => 'text',
                            'label' => 'Default',
                            'default' => 'm/d/y g:ia'
                        ],
                        'dateFormat.long' => [
                            'type' => 'text',
                            'label' => 'Long',
                            'default' => 'l, F j, g:ia'
                        ],
                        'dateFormat.medium' => [
                            'type' => 'text',
                            'label' => 'Medium',
                            'default' => 'F j, g:ia'
                        ],
                        'dateFormat.short' => [
                            'type' => 'text',
                            'label' => 'Short',
                            'default' => 'm/d/y'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
