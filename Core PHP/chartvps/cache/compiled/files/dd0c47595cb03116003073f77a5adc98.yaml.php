<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp7.3/htdocs/chartvps/user/config/plugins/email.yaml',
    'modified' => 1550783312,
    'data' => [
        'enabled' => true,
        'from' => 'support@chartvps.com',
        'from_name' => 'ChartVPS Support',
        'to' => 'support@chartvps.com',
        'to_name' => 'ChartVPS',
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'chartvps.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'support@chartvps.com',
                'password' => 'Aghast@Christie3'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
