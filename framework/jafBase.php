<?php
namespace Jaf;

use Jaf\base\Base;
use Jaf\base\Service;

define('JAF_PATH', dirname(__FILE__));

class JafBase
{
    public static $autoLoadFiles = array();

    public static $app;

    public static function autoload($className)
    {
        if(isset(self::$autoLoadFiles[$className])){
            $classFiles = JAF_PATH.self::$autoLoadFiles[$className];
        }
        else{
            return;
        }
        include($classFiles);
    }

    public static function creatApplication($config)
    {
        return new \Jaf\web\CWebApplication($config);
    }

    public static function configure($object, $properties)
    {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }
        return $object;
    }

    public static function createObject($type, array $params = array())
    {
        if (is_string($type)) {
            return Service::get($type);
        }
        else {
            return Service::get($type['class']);
        }
    }
}

\Jaf\JafBase::$autoLoadFiles = require(dirname(__FILE__).'/config/autoLoad.php');
spl_autoload_register(array('\Jaf\JafBase', 'autoload'), true, true);