<?php
return array(
    'database' => array(
        'type' => 'pgsql',
        'host' => getenv('DB_HOST') ?: 'localhost',
        'port' => getenv('DB_PORT') ?: '6543',
        'database' => getenv('DB_NAME') ?: 'postgres',
        'login' => getenv('DB_USER') ?: 'postgres',
        'password' => getenv('DB_PASSWORD') ?: '',
        'prefix' => '',
        'connection_uri_params' => 'sslmode=require&connect_timeout=30&options=-c%20statement_timeout=60000',
        'pdo_options' => array(
            2 => false,    // PDO::ATTR_PERSISTENT => false
            1 => 60,       // PDO::ATTR_TIMEOUT => 60
        ),
    ),
);
