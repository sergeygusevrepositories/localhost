<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 21:09
 */
class ProductFactory
{
    private $_types = array();

    public function __construct()
    {
        $this->_types = [
            'keyboard' => 'Keyboard',
            'mouse' => 'Mouse'
        ];
    }

    public function make($product)
    {
        if (!array_key_exists($product['type'], $this->_types)) {
            throw new InvalidArgumenException("Тип {$product['type']} не найден.");
        }

        $class_name = $this->_types[$product['type']];

        return new $class_name($product);
    }
}