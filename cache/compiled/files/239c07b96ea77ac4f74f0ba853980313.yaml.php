<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/events/blueprints.yaml',
    'modified' => 1487307613,
    'data' => [
        'name' => 'Events',
        'version' => '1.0.15',
        'description' => 'The **Events** plugin provides events for a Grav site using event frontmatter.',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Kaleb Heitzman',
            'email' => 'kalebheitzman@gmail.com',
            'url' => 'http://kheitzman.com'
        ],
        'homepage' => 'http://github.com/kalebheitzman/grav-plugin-events',
        'demo' => 'http://grav.brandr.co/calendar',
        'keywords' => 'events, plugin',
        'bugs' => 'https://github.com/kalebheitzman/grav-plugin-events/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'datetools'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'processing' => [
                    'type' => 'section',
                    'title' => 'Processing'
                ],
                'event_template_types' => [
                    'type' => 'text',
                    'label' => 'Event Template Types',
                    'help' => 'What templates should be checked for event related content?',
                    'default' => 'event'
                ],
                'display_months_out' => [
                    'type' => 'text',
                    'label' => 'Months Out to Display Events',
                    'help' => 'In integer form, how many months out should repeating dates display?',
                    'default' => 3,
                    'placeholder' => 3
                ],
                'enable_single_event_filter' => [
                    'type' => 'toggle',
                    'label' => 'Enable Single Event Filter',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'tranlation' => [
                    'type' => 'section',
                    'title' => 'Translation'
                ],
                'date_format.translate' => [
                    'type' => 'toggle',
                    'label' => 'Translate dates',
                    'help' => 'Translations can be found in language.yaml',
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
                'collections' => [
                    'type' => 'section',
                    'title' => 'Collections'
                ],
                'filter_combinator' => [
                    'type' => 'text',
                    'label' => 'Filter Combinator',
                    'default' => 'and'
                ],
                'events_collection' => [
                    'type' => 'text',
                    'label' => 'Events Collection',
                    'default' => '\'@page\': \'/events\''
                ]
            ]
        ]
    ]
];
