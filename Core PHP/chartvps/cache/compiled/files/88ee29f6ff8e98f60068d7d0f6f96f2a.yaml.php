<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp7.3/htdocs/chartvps/user/config/site.yaml',
    'modified' => 1550766164,
    'data' => [
        'title' => 'ChartVPS',
        'default_lang' => 'en',
        'author' => [
            'name' => 'ChartVPS',
            'email' => 'support@chartvps.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'High performance VPS hosting'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
