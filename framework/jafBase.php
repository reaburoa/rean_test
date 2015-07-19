<?php
namespace Jaf;

define('JAF_PATH', dirname(__FILE__));

class JafBase
{
    public static $autoLoadFiles = array();

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
}

\Jaf\JafBase::$autoLoadFiles = require(dirname(__FILE__).'/config/autoLoadFiles.php');
spl_autoload_register(array('\Jaf\JafBase', 'autoload'), true, true);