<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 8:03
 */
class TwitterAdapter implements SocialAdapter
{
    private $twitter;

    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    public function send($msg)
    {
        $this->twitter->sendTweet($msg);
    }
}