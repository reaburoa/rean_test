<?php

class testController extends CController
{
    public function indexaction()
    {
        $this->ctrl();
        echo '<br />child!';
    }
}