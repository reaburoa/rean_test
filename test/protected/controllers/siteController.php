<?php
namespace test\controllers;
use Jaf\web\Controller;

class siteController extends Controller
{
    public function indexAction()
    {
        echo '<br />index html!';
    }
}