<?php
namespace Jaf\web;

use Jaf;

class Controller implements \Jaf\base\Controller
{
    public function run()
    {

    }

    public function getController()
    {
        return $this->_model;
    }

    public function getAction()
    {
        return $this->_id;
    }

    public function beforeAction()
    {

    }

    public function afterAction()
    {

    }
}