<?php

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    static function getInstance()
    {
        if (!self::$instance) {
            $instance = new Singleton();
        }

        return self::$instance;
    }
}
