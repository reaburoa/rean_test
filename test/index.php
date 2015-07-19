<?php
    $jaf = dirname(__FILE__).'/../framework/jaf.php';
    $config = dirname(__FILE__).'/protected/config/config.php';
    require_once($jaf);
    Jaf::creatApplication($config);

