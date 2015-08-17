<?php
namespace Jaf\base;

use Jaf;
use Jaf\base\Base;

class Module extends Base
{
    public function getPath()
    {

    }

    public static function createController($controller)
    {
        $controller .= 'Controller';
        return Jaf::createObject('\\test\\controllers\\'.$controller);
    }
}