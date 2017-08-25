<?php

return [

    'setting' => [
        'work_num'  => '8',
        'daemonize' => false ,
        'document_root' => realpath(__DIR__ . '/../public'),
        'enable_static_handler' => true , // 静态文件支持 .
    ],

    'debug' => true ,

];