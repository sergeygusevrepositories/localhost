<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 22:09
 */
class NeyYearEmailBody extends EmailBodyDecorator
{
    public function loadBody()
    {
        echo "This is Extra Content for Ney Year.<br />";
        $this->emailBody->loadBody();
    }
}