<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://email/email.yaml',
<<<<<<< HEAD
    'modified' => 1473500968,
=======
<<<<<<< HEAD
    'modified' => 1473498871,
=======
    'modified' => 1473179275,
>>>>>>> ab42d56c3d5b872be03a8ac3a14c8e4509c48177
>>>>>>> 5e074b83a820a8c83de32bc2bb5ae5ca0ed6d306
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'from_name' => NULL,
        'to' => NULL,
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
