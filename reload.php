<?php
// 需要监听的目录
$dir = __DIR__ ;

$master_pid = isset($argv[1]) ? $argv[1]:false;

require_once $dir . '/vendor/autoload.php' ;
if($master_pid){
    $reload = \Rookiejin\SwooleTools\Reload::getInstance()->watch($dir,$master_pid,['.php']);
}else{
    echo "please input pid" . PHP_EOL ;
}
