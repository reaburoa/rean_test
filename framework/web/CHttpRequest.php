<?php
namespace Jaf\web;
use Jaf;

class CHttpRequest
{
    private $_route;

    public function getRequest($route = '')
    {
        if(!$route){
            $this->_route = $_SERVER['REQUEST_URI'];
        }
        else{
            $this->_route = $route;
        }

        return $this->_route;
    }

    public function parseUrl($route = '')
    {
        if(strpos($route, '?') !== false){
            $realUrlInfo = substr($route, 1, strpos($route, '?') - 1);
        }
        else{
            $realUrlInfo = substr($route, 1);
        }
        return explode('/', $realUrlInfo);
    }
}