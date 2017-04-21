<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 21:28
 */
interface ProductInterface
{
    function getId();
    function getModel();
    function getPrice();
    function getType();
}