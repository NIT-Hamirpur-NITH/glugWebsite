<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/plugins/login/login.yaml',
    'modified' => 1487787353,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => false,
        'route_register' => false,
        'route_activate' => '/activate_user',
        'route_forgot' => '/forgot_password',
        'route_reset' => '/reset_password',
        'redirect_after_login' => NULL,
        'parent_acl' => false,
        'protect_protected_page_media' => false,
        'user_registration' => [
            'enabled' => true,
            'fields' => [
                0 => 'username',
                1 => 'password',
                2 => 'email',
                3 => 'fullname',
                4 => 'title'
            ],
            'access' => [
                'site' => [
                    'login' => 'true'
                ]
            ],
            'options' => [
                'validate_password1_and_password2' => true,
                'set_user_disabled' => false,
                'login_after_registration' => true,
                'send_activation_email' => false,
                'send_notification_email' => false,
                'send_welcome_email' => false
            ]
        ],
        'rememberme' => [
            'enabled' => true,
            'timeout' => 604800,
            'name' => 'grav-rememberme'
        ]
    ]
];
