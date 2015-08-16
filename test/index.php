<?php
    /*$jaf = dirname(__FILE__).'/../framework/jaf.php';
    $config = require_once(dirname(__FILE__).'/protected/config/config.php');
    require_once($jaf);
    $application = new Jaf\base\Application($config);
    $application->run();*/
include 'protected/controller/siteController.php';
var_dump(get_class(new test\controller\siteController()));
//$site->indexAction();
