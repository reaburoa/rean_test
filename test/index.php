<?php

    $jaf = dirname(__FILE__).'/../framework/jaf.php';

    require_once($jaf);

    \Jaf\Jaf::run();
echo '<br />';
    $cont = new CController();
    $user = new CUserIdentity();
    $cont->ctrl();
echo '<br />';
    $user->cuser();

    include_once('./protected/controller/testController.php');
    $obj = new testController();
    $obj->indexaction();