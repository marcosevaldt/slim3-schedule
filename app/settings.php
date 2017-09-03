<?php
return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],
        // Permissão dos Usuarios por Rotas
        'auth' => [
            'Convidado' => [
                'home.index',
            ],
        ],
        // Monolog Settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
        ],

        // PHPMailer
        'phpmailer' => [
            'host' => '',
            'SMTPAuth' => true,
            'Username' => '',
            'Password' => '',
            'SMTPSecure' => 'tls',
            'Port' => 587,
            'isHTML' => true,
            'setFrom' => '',
            'interno' => '',
        ],

        // Doctrine
        'doctrine' => [
            'meta' => [
                'entity_path' => [
                    'app/src/Entity'
                ],
                'auto_generate_proxies' => true,
                'proxy_dir' => __DIR__.'/../cache/proxies',
                'cache' => null,
            ],
            'connection' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'sistema_consultoria',
                'user' => 'root',
                'password' => 'root',
                'charset' => 'utf8mb4',
                'collate' => 'utf8mb4_general_ci',
            ]
        ]

    ],
];
