<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 21:47
 */
class ChristmasEmail extends EmailBody
{
    public function loadBody()
    {
        parent::loadBody();
        $this->body .= 'Added content for Xmas.<br />';
    }
}