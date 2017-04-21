<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 21:51
 */
class NewYearEmail extends EmailBody
{
    public function loadBody()
    {
        parent::loadBody();
        $this->body .= "Added Content for Ney Year.<br />";
    }
}