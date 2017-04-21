<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.04.17
 * Time: 22:00
 */
abstract class EmailBodyDecorator implements EmailBodyInterface
{
    protected $emailBody;

    public function __construct(EmailBodyInterface $emailBody)
    {
        $this->emailBody = $emailBody;
    }

    abstract public function loadBody();
}