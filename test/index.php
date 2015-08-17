<?php
    $jaf = dirname(__FILE__).'/../framework/jaf.php';
    $config = require_once(dirname(__FILE__).'/protected/config/config.php');
    require_once($jaf);
    $application = new Jaf\web\Application($config);
    $application->run();

