<?php

namespace Jaf\base;
use Jaf;

class Model
{
    private $_components = array();

    private $_definition = array();

    public function get($id)
    {
        if (isset($this->_components[$id])) {
           return $this->_components[$id];
        }

        if (isset($this->_definition[$id])) {
            return Jaf::createObject($this->_definition[$id]);
        }
        else {
            return null;
        }
    }

    public function set($id, $components)
    {
        $this->_definition[$id] = $components;
    }

    public static function createController($controller)
    {//print_r(get_called_class());exit;
        $controller .= 'Controller';
        return Jaf::createObject('\\test\\controller\\'.$controller);
    }
}