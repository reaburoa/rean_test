<?php
namespace Jaf\web;

use Jaf;

class Http
{
    private $_route;
    private $_defaultController = 'site';

    public function getRequest($route = '')
    {
        if (!$route) {
            $this->_route = $_SERVER['REQUEST_URI'];
        } else {
            $this->_route = $route;
        }

        return $this->_route;
    }
}