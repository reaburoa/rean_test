<?php
namespace Jaf\web;
use Jaf;

class CHttpRequest
{
    public function getRequest($route = '')
    {
        return $_SERVER['REQUEST_URI'];
    }
}