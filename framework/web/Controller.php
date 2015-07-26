<?php
namespace Jaf\web;
use Jaf;

class CController
{
    private $_model = '';
    private $_id = '';

    public function __construct($model, $id)
    {
        $this->_model = $model;
        $this->_id = $id;
    }

    public function run()
    {
        $realController = $this->_model.'Controller';
        $realAction = $this->_id.'Action';
        $basePath = CWebApplication::getBasePath();
        $path = $basePath.'/controller/'.$realController.'.php';
        if(file_exists($path)){
            include($path);
        }
        else{
            throw new \Exception('No '.$path.' file');
        }
        $obj = new $realController();
        $obj->$realAction();
    }

    public function getControlle()
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