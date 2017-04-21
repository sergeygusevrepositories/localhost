<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 20:02
 */
class Product
{
    private $_db = null;

    public function __construct()
    {
        $this->_db = Db::getInstance();
    }

    public function getAllProducts() {
        $result = $this->_db->query("SELECT * FROM products");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}