<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 20:27
 */
class Db
{
    private static $_db = null;

    public static function getInstance() {
        if(self::$_db === null) {
            self::$_db = new PDO('mysql:host=localhost;dbname=cart', 'root', '123');
        }

        return self::$_db;
    }

    private function __construct() {}
    private function __clobe() {}
    private function __wakeup() {}
}