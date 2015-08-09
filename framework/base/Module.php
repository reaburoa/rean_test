<?php
namespace Jaf\base;
use Jaf;

class Module
{
    public static function createController($controller)
    {//print_r(get_called_class());exit;
        $controller .= 'Controller';
        return Jaf::createObject('\\test\\controller\\'.$controller);
    }
}