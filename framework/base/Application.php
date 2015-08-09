<?php
namespace Jaf\base;
use Jaf;

class Application extends Module
{
    public function __construct($config)
    {
        Jaf::$app = $this;
        $this->preInit();
    }

    public function preInit()
    {
        foreach ($this->coreComponents() as $key => $components) {
            Model::set($key, $components);
        }
    }

    public function setBasePath($path)
    {
        //self::$_basePath = $path;
    }

    public function getRequest()
    {
        return Model::get('HttpRequest');
    }

    public function getUrlManager()
    {
        return Model::get('UrlManager');
    }

    public static function getBasePath()
    {
        //return self::$_basePath;
    }

    public function run()
    {
        $request = $this->getRequest()->getRequest();
        $module = $this->getUrlManager()->parseUrl($request);
        var_dump(Module::createController($module['controller']));
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
