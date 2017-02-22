<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/admin/blueprints/config/media.yaml',
    'modified' => 1487788116,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MEDIA',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'types' => [
                    'name' => 'medias',
                    'type' => 'list',
                    'label' => 'PLUGIN_ADMIN.MEDIA_TYPES',
                    'style' => 'vertical',
                    'key' => 'extension',
                    'controls' => 'both',
                    'collapsed' => true,
                    'fields' => [
                        '.extension' => [
                            'type' => 'key',
                            'label' => 'PLUGIN_ADMIN.FILE_EXTENSION'
                        ],
                        '.type' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.TYPE'
                        ],
                        '.thumb' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.THUMB'
                        ],
                        '.mime' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.MIME_TYPE'
                        ],
                        '.image' => [
                            'type' => 'textarea',
                            'yaml' => true,
                            'label' => 'PLUGIN_ADMIN.IMAGE_OPTIONS',
                            'validate' => [
                                'type' => 'yaml'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
