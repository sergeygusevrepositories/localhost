<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 11.04.17
 * Time: 20:17
 */
class Singleton
{
    protected static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
            echo "<p>First initialization</p>";
        } else {
            echo "<p>...initialization</p>";
        }

        return self::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}

Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();

