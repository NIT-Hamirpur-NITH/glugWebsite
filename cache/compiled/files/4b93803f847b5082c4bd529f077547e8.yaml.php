<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/admin/blueprints/admin/pages/move.yaml',
<<<<<<< HEAD
    'modified' => 1473500958,
=======
<<<<<<< HEAD
    'modified' => 1473498855,
=======
    'modified' => 1473179275,
>>>>>>> ab42d56c3d5b872be03a8ac3a14c8e4509c48177
>>>>>>> 5e074b83a820a8c83de32bc2bb5ae5ca0ed6d306
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                    'data-default@' => '\\Grav\\Plugin\\admin::rawRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ]
            ]
        ]
    ]
];
