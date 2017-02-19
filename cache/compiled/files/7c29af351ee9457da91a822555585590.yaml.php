<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/sitemap/blueprints/sitemap.yaml',
    'modified' => 1487494963,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'sitemap' => [
                                    'type' => 'section',
                                    'title' => 'Sitemap',
                                    'underline' => true,
                                    'fields' => [
                                        'header.sitemap.changefreq' => [
                                            'type' => 'select',
                                            'label' => 'Sitemap change frequency',
                                            'default' => '',
                                            'options' => [
                                                '' => 'Use Global',
                                                'always' => 'Always',
                                                'hourly' => 'Hourly',
                                                'daily' => 'Daily',
                                                'weekly' => 'Weekly',
                                                'monthly' => 'Monthly',
                                                'yearly' => 'Yearly',
                                                'never' => 'Never'
                                            ]
                                        ],
                                        'header.sitemap.priority' => [
                                            'type' => 'select',
                                            'label' => 'Sitemap Priority',
                                            'default' => '',
                                            'options' => [
                                                '' => 'Use Global',
                                                '0.1' => 0.10000000000000001,
                                                '0.2' => 0.20000000000000001,
                                                '0.3' => 0.29999999999999999,
                                                '0.4' => 0.40000000000000002,
                                                '0.5' => 0.5,
                                                '0.6' => 0.59999999999999998,
                                                '0.7' => 0.69999999999999996,
                                                '0.8' => 0.80000000000000004,
                                                '0.9' => 0.90000000000000002,
                                                '1.0' => 1
                                            ],
                                            'validate' => [
                                                'type' => 'float'
                                            ]
                                        ]
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
