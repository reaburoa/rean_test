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
            return $this->_definition[$id] = Jaf::createObject($this->_definition[$id]);
        }
        else {
            return null;
        }
    }

    public function set($id, $components)
    {

    }
}