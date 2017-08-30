<?php

    return [
        'debug' => true ,

        'log' => [
            'driver' => 'cli',
        ],

        'route' => [
            'regex' => false ,
        ],

        'session' => [
            'save_path' => 'storage/framework/session',
            'expire'    => 7200 ,
        ]

    ];
