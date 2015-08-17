<?php
namespace Jaf\web;
use Jaf;

class Application extends \Jaf\base\Application
{
    private static $_basePath = '';

    public function setBasePath($path)
    {
        self::$_basePath = $path;
    }

    public static function getBasePath()
    {
        return self::$_basePath;
    }

    public function coreComponents()
    {
        return array_merge(parent::coreComponents(), array(
            'View' => array('class' => 'Jaf\web\View'),
            'Http' => array('class' => 'Jaf\web\Http'),
            'User' => array('class' => 'Jaf\web\User')
        ));
    }
}
