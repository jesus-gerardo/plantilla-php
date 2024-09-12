<?php

    return [
        'use' => env('DB_CONNECTION', 'default'),
        
        'instances' => [
            "default" => [
                'hostname' => 'localhost',
                "database" => 'test',
                "username" => 'root',
                "password" => '',
                "charset" => "utf-8"
            ],
            'mysql' => [
                'hostname' => 'localhost',
                "database" => 'test',
                "username" => 'root',
                "password" => '',
                "charset" => "utf-8"
            ],
            'mysql' => [
                'hostname' => 'localhost',
                "database" => 'test',
                "username" => 'root',
                "password" => '',
                "charset" => "utf-8",
                'schema' => 'public'
            ]
        ]
    ]

?>