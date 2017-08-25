<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 11:39
 */

namespace App\Controller;


class Home
{
    protected $i = 1 ;

    protected $b = 3333333333;

    public function bootstrap()
    {
        $this->i = 1 ;
        $this->b = 3333333333 ;
    }

    public function index()
    {
        $this->i ++ ;

        return $this->i ;
    }


    public function put()
    {
        return 'put';
    }

    public function post()
    {
        return 'post';
    }

    public function file()
    {
        return 'file';
    }

    public function get()
    {
        return 'get';
    }

    public function delete()
    {
        return 'delete';
    }

    public function regex()
    {
        return 'delete';
    }

    public function endResponse()
    {

    }


}