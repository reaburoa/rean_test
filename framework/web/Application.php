<?php
namespace Jaf\web;
use Jaf;
use Jaf\base\Service;

class Application extends \Jaf\base\Application
{
    private static $_basePath = '';

    public function coreComponents()
    {
        return array_merge(parent::coreComponents(), array(
            'View' => array('class' => 'Jaf\web\View'),
            'Http' => array('class' => 'Jaf\web\Http'),
            'User' => array('class' => 'Jaf\web\User')
        ));
    }

    public function handleRequest($request)
    {
        Service::runAction($request);
    }
}
