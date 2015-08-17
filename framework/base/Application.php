<?php
namespace Jaf\base;
use Jaf;

abstract class Application extends Jaf\base\Base
{
    public function __construct($config)
    {
        parent::__construct($config);
        Jaf::$app = $this;
        $this->preInit();
    }

    public function preInit()
    {
        foreach ($this->coreComponents() as $key => $components) {
            Jaf\base\Service::set($key, $components['class']);
        }
    }

    public function setBasePath($path)
    {
        //self::$_basePath = $path;
    }

    public function getRequest()
    {
        return Jaf\base\Service::get('Http');
    }

    public function getUrlManager()
    {
        return Jaf\base\Service::get('UrlManager');
    }

    abstract public function handleRequest($request);

    public static function getBasePath()
    {
        //return self::$_basePath;
    }

    public function run()
    {
        $request = $this->getRequest()->getRequest();
        $module = $this->getUrlManager()->parseUrl($request);//print_r($module);exit;
        $this->handleRequest($request);
        //var_dump(Module::createController($module['controller']));
    }

    public function coreComponents()
    {
        return array(
            'UrlManager' => array('class' => 'Jaf\web\UrlManager')
        );
    }
}
