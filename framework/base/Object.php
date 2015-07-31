<?php
namespace Jaf\base;
use Jaf;

class Object
{
    public function __construct($config = array())
    {
        if (!empty($config)) {
            Jaf::configure($this, $config);
        }
        $this->init();
    }

    public function init()
    {

    }
}