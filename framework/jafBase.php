<?php
use \Jaf\Jaf;

define('ROOT', dirname(__FILE__));

class JafBase
{
    private static $autoLoadFiles = '';

    public static function autoLoad()
    {
        self::$autoLoadFiles = include_once(dirname(__FILE__).'/config/autoLoadFiles.php');
        if(isset(self::$autoLoadFiles) && is_array(self::$autoLoadFiles)){
            foreach(self::$autoLoadFiles as $value){
                include(ROOT.$value.'.php');
            }
        }
        return true;
    }

    public static function run()
    {

        echo 'this is framework';
    }
}

spl_autoload_register(array('JafBase', 'autoLoad'));