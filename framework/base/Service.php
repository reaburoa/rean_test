<?php
namespace Jaf\base;
use Jaf;

class Service
{
    protected static $_coreComponents = array();

    public $controllerNamespace = '';

    public function __construct($config = array())
    {
        if (!empty($config)) {
            Jaf::configure($this, $config);
        }

        $this->init();
    }

    public function init()
    {
        /*$con = 'site';echo $this->controllerNamespace."\\".$con."Controller";
        var_dump(class_exists($this->controllerNamespace."\\".$con."Controller"));exit;*/
    }

    public static function set($name, $value)
    {
        return self::$_coreComponents[$name] = $value;
    }

    public static function get($class, $params = array(), $config = array())
    {
        $reflection = new \ReflectionClass(self::$_coreComponents[$class]);
        return $reflection->newInstance();
    }

    public function runAction($request)
    {
        $con = 'site';echo $this->controllerNamespace."\\".$con."Controller";
        var_dump(class_exists($this->controllerNamespace."\\".$con."Controller"));exit;
    }
}