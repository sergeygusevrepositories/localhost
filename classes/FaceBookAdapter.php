<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 8:13
 */
class FaceBookAdapter implements SocialAdapter
{
    private $facebook;

    public function __construct(FaceBook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function send($msg)
    {
        $this->facebook->updateStatus($msg);
    }
}