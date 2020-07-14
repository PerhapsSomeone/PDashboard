<?php

class Base {
    const PLUGIN_NAME = "Base Plugin";
    const PLUGIN_TYPE = "Internal";

    const ROUTING_INDEX = "/";
    const ROUTING_LIST = [
        "/" => "home.php",
    ];

    protected static $_instance = null;


    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function getName() {
        return self::PLUGIN_NAME;
    }

    public function getType() {
        return self::PLUGIN_TYPE;
    }

    public function getViewByPath(string $path) {

    }



    protected function __clone() {}

    protected function __construct() {}
}