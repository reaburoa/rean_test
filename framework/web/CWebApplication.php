<?php
namespace Jaf\web;
use Jaf;

class CWebApplication
{
    private static $_basePath = '';

    public function __construct($config)
    {
        if(isset($config['basePath'])){
            $this->setBasePath($config['basePath']);
        }
        else{
            $this->setBasePath('protected');
        }

        $this->getRequest();
    }

    public function setBasePath($path)
    {
        self::$_basePath = $path;
    }

    public function getRequest()
    {
        $httpRequest = new \Jaf\web\CHttpRequest();
        $route = $httpRequest->getRequest();
        list($model, $id) = $httpRequest->parseUrl($route);
        $controller = new \Jaf\web\CController($model, $id);
        $controller->run();
    }

    public static function getBasePath()
    {
        return self::$_basePath;
    }
}
