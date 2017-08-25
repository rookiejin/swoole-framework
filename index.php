<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Rookiejin\Swoole\Application(__DIR__ . '/app') ;
$app->bootstrap();
$app->run();