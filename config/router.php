<?php

/**
 *  route => [
 *    'methods[,method]' || ['method','method'],
 *    'Controller@method'
 *  ]
 */
    return [

        'home/index' => [
            'get,post',
            'Home@index',
        ],
        'home/get' => [
            'get',
            'Home@get',
        ],
        'home/post' => [
            'post',
            'Home@post',
        ],
        'home/put' => [
            'put' ,
            'Home@put',
        ],
        'home/delete' => [
            'delete',
            'Home@delete',
        ],
        'home/file' => [
            'post',
            'Home@file',
        ],
    ];