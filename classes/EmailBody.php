<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 21:40
 */
class EmailBody
{
    private $header = 'This is email header';
    private $footer = 'This is email footer';
    public $body = '';

    public function loadBody()
    {
        $this->body .= 'This os Main Email body.<br />';
    }
}