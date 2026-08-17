<?php
return [
    'site_name' => 'Victory Express',
    'db' => [
        'host' => getenv('VEX_DB_HOST') ?: 'localhost',
        'name' => getenv('VEX_DB_NAME') ?: 'victory_express',
        'user' => getenv('VEX_DB_USER') ?: 'root',
        'password' => getenv('VEX_DB_PASSWORD') ?: '',
    ],
];
