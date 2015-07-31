<?php
namespace Jaf\base;
use Jaf;

class Application extends Model
{
    public function __construct($config)
    {
        Jaf::$app = $this;
        $this->preInit();
    }

    public function preInit()
    {

    }

    public function setBasePath($path)
    {
        //self::$_basePath = $path;
    }

    public function getRequest()
    {echo 'request123';
        /*$httpRequest = new \Jaf\web\CHttpRequest();
        $route = $httpRequest->getRequest();
        list($model, $id) = $httpRequest->parseUrl($route);
        $controller = new \Jaf\web\CController($model, $id);
        $controller->run();*/
    }

    public static function getBasePath()
    {
        //return self::$_basePath;
    }

    public function run()
    {
        var_dump(Jaf::$app);
    }

    public function coreComponents()
    {
        return array(
            'UrlManager' => array('class' => 'Jaf\web\UrlManager'),
            'View' => array('class' => 'Jaf\web\View'),
            'HttpRequest' => array('class' => 'Jaf\web\HttpRequest')
        );
    }
}
