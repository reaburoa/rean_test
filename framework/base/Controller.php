<?php
namespace Jaf\base;
use Jaf;

interface Controller
{
    public function run();

    public function getAction();

    public function beforeAction();

    public function afterAction();
}