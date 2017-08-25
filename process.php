<?php 
    if(count($argv) <= 1){
        output("please input the pid");
        exit(0) ;
    }

    $pid = $argv [1];

    $res = Swoole\Process::kill($pid);
    var_dump($res);


    function output($str){
        echo "=====================" . PHP_EOL;
        echo $str .PHP_EOL;
        echo "=====================" . PHP_EOL;
    }


