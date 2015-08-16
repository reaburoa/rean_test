<?php
namespace Jaf\base;
use Jaf;

class Service
{
    protected static $_coreComponents = array();

    public static function set($name, $value)
    {
        return self::$_coreComponents[$name] = $value;
    }

    public static function get($class, $params = array(), $config = array())
    {
        $reflection = new \ReflectionClass(self::$_coreComponents[$class]);
        return $reflection->newInstance();
    }
}