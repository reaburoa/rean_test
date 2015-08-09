<?php
namespace Jaf\di;
use Jaf;

class Container
{
    public static function get($class, $params = array(), $config = array())
    {
        $reflection = new \ReflectionClass($class);
        return $reflection->newInstance();
    }
}