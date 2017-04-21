<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 21:21
 */
class Mouse implements ProductInterface
{
    protected $_id;
    protected $_model;
    protected $_price;

    public function __construct($product)
    {
        $this->_id = $product['id'];
        $this->_model = $product['model'];
        $this->_price = $product['price'];
    }

    function getId()
    {
        return $this->_id;
    }

    function getModel()
    {
        return $this->_model;
    }

    function getPrice()
    {
        return $this->_price;
    }

    function getType()
    {
        return 'mouse';
    }
}