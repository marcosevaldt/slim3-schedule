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
            'Admin' => [
                'home.index',
                'home.general',
                'home.user.show',
                'home.user.create',
                'home.user.store',
                'home.user.edit',
                'home.user.update',
                'home.user.destroy',
                'home.salas.show',
                'home.salas.create',
                'home.salas.store',
                'home.salas.edit',
                'home.salas.update',
                'home.salas.destroy',
                'home.agendamento.show',
                'home.agendamento.calendar',
                'home.agendamento.agendar',
                'home.agendamento.store',
                'home.agendamento.edit',
                'home.agendamento.destroy',
                'home.agendamento.update',            
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
