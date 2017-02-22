<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://gitter/gitter.yaml',
    'modified' => 1476642974,
    'data' => [
        'enabled' => true,
        'enable_on_routes' => [
            0 => '/'
        ],
        'disable_on_routes' => [
            0 => '/blog/blog-post-to-ignore',
            1 => '/ignore-this-route'
        ]
    ]
];
