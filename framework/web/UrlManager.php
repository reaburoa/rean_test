<?php
namespace Jaf\web;
use Jaf;

class UrlManager
{
    public function parseUrl($route = '')
    {
        if ($route == '/') {
            return array(
                'controller' => 'site',
                'action' => 'index'
            );
        }
        if(strpos($route, '?') !== false){
            $realUrlInfo = substr($route, 1, strpos($route, '?') - 1);
        }
        else{
            $realUrlInfo = substr($route, 1);
        }
        return explode('/', $realUrlInfo);
    }
}