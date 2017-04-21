<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 21:58
 */
class Email implements EmailBodyInterface
{
    public function loadBody()
    {
        echo "This is Main Email body.<br />";
    }
}