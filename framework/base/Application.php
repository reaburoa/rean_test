<?php
namespace Jaf\base;
use Jaf;

abstract class Application extends Jaf\base\Base
{
    public function __construct($config)
    {
        parent::__construct($config);
        Jaf::$app = $this;
        $this->preInit($config);
    }

    public function preInit(&$config)
    {
        if (isset($config['basePath'])) {
            self::setBasePath($config['basePath']);
            unset($config['basePath']);
        }
        else {
            throw new \Exception('The "basePath" configuration for Application is required.');
        }

        foreach ($this->coreComponents() as $key => $components) {
            Jaf\base\Service::set($key, $components['class']);
        }
    }

    public function setBasePath($path)
    {
        parent::setBasePath($path);
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

    public function getBasePath()
    {
        return parent::getBasePath();
    }

    public function run()
    {
        $request = $this->getRequest()->getRequest();
        $module = $this->getUrlManager()->parseUrl($request);
        $this->handleRequest($request);
    }

    public function coreComponents()
    {
        return array(
            'UrlManager' => array('class' => 'Jaf\web\UrlManager')
        );
    }
}
