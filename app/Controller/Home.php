<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 11:39
 */

namespace App\Controller;


use Rookiejin\Swoole\Container\Context;

class Home
{

    protected $i = 1 ;

    protected $b = 3333333333;

    public function index()
    {
        $this->i ++ ;

        return $this->i ;
    }


    public function put()
    {
        /**
         * @var Context
         */

        $context = context() ;

        $demo = [];

        $demo ['server'] = $context->getRequest()->getServer();

        $demo ['get'] = $context->getRequest()->getGet();

        $demo ['post'] = $context->getRequest()->getPost();

        $demo ['file'] = $context->getRequest()->getFiles();

        $context->getResponse()->addHeader(['Content-Type' => 'application/json']);

        $demo ['response-header'] = $context->getResponse()->getHeader();

        return json_encode($demo);
    }

    public function post()
    {
        /**
         * @var Context
         */

        $context = context() ;

        $demo = [];

        $demo ['server'] = $context->getRequest()->getServer();

        $demo ['get'] = $context->getRequest()->getGet();

        $demo ['post'] = $context->getRequest()->getPost();

        $demo ['file'] = $context->getRequest()->getFiles();

        $context->getResponse()->addHeader(['Content-Type' => 'application/json']);

        $demo ['response-header'] = $context->getResponse()->getHeader();

        return json_encode($demo);
    }

    public function file()
    {
        /**
         * @var Context
         */

        $context = context() ;

        $demo = [];

        $demo ['file'] = $context->getRequest()->getFiles();

        return json_encode($demo);
    }

    public function get()
    {
        /**
         * @var Context
         */

        $context = context() ;


        $demo = [];

        $demo ['server'] = $context->getRequest()->getServer();

        $demo ['get'] = $context->getRequest()->getGet();

        $demo ['post'] = $context->getRequest()->getPost();

        $demo ['file'] = $context->getRequest()->getFiles();

        $demo ['cookies'] = $context->getRequest()->getCookies();

        $context->getResponse()->addHeader(['Content-Type' => 'application/json']);

        $context->getResponse()->addCookie('key','value',0,'','',true,true);

        $demo ['response-header'] = $context->getResponse()->getHeader();

        return json_encode($demo);

    }

    public function delete()
    {
        /**
         * @var Context
         */

        $context = context() ;


        $demo = [];

        $demo ['server'] = $context->getRequest()->getServer();

        $demo ['get'] = $context->getRequest()->getGet();

        $demo ['post'] = $context->getRequest()->getPost();

        $demo ['file'] = $context->getRequest()->getFiles();

        $context->getResponse()->addHeader(['Content-Type' => 'application/json']);

        $demo ['response-header'] = $context->getResponse()->getHeader();

        return json_encode($demo);
    }

    public function regex()
    {
        /**
         * @var Context
         */

        $context = context() ;


        $demo = [];

        $demo ['server'] = $context->getRequest()->getServer();

        $demo ['get'] = $context->getRequest()->getGet();

        $demo ['post'] = $context->getRequest()->getPost();

        $demo ['file'] = $context->getRequest()->getFiles();

        $context->getResponse()->addHeader(['Content-Type' => 'application/json']);

        $demo ['response-header'] = $context->getResponse()->getHeader();

        return json_encode($demo);
    }

}