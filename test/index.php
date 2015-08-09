<?php
    $jaf = dirname(__FILE__).'/../framework/jaf.php';
    $config = dirname(__FILE__).'/protected/config/config.php';
    require_once($jaf);
    $application = new Jaf\base\Application($config);
    $application->run();
