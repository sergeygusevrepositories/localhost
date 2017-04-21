<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 22:05
 */
class CristmasEmailBody extends EmailBodyDecorator
{
    public function loadBody()
    {
        echo "This is Extra Content for Cristmas.<br />";
        $this->emailBody->loadBody();
    }
}