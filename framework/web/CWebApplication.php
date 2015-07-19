<?php
namespace Jaf\web;
use Jaf;

class CWebApplication
{
    private $_basePath = '';

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
        $this->_basePath = $path;
    }

    public function getRequest()
    {
        $httpRequest = new \Jaf\web\CHttpRequest();
        $route = $httpRequest->getRequest();
    }
}
