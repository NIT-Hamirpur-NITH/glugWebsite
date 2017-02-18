<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/config/plugins/email.yaml',
    'modified' => 1487250599,
    'data' => [
        'enabled' => true,
        'from' => 'lokeshhsharma@gmail.com',
        'from_name' => 'Glug Nith',
        'to' => 'lokeshhsharma@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
