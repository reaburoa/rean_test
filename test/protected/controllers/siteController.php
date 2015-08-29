<?php
namespace test\controllers;
use Jaf\web\Controller;

class siteController extends Controller
{
    public function indexAction()
    {
        //var_dump(\Jaf::$app->getRequest());
        echo '<br />index html!';
    }
}