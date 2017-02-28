<?php
$settings = require 'app/settings.php';
return [
    'paths' => [
        'migrations' => 'migrations'
    ],
    'migration_base_class' => '\App\Migration\Migration',
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'dev',
        'dev' => [
            'adapter' => $settings['settings']['db']['driver'],
            'host' => $settings['settings']['db']['host'],
            'name' => $settings['settings']['db']['database'],
            'user' => $settings['settings']['db']['username'],
            'pass' => $settings['settings']['db']['password']
        ]
    ]
];