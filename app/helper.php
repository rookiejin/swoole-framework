<?php

function dd($var){
    if(php_sapi_name() == 'cli'){
        $dump = new \Symfony\Component\VarDumper\Dumper\CliDumper();
    }else{
        $dump = new \Symfony\Component\VarDumper\Dumper\HtmlDumper();
    }

    $dump->dump((new \Symfony\Component\VarDumper\Cloner\VarCloner)->cloneVar($var)  );
    die;
}


function add($x,$y){
    return $x + $y ;
}