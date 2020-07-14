<?php
/*
class PluginBase {
    private $pluginName = "Base Plugin, do not remove!";
    private $pluginType = "BasePlugin";

    public $ROUTING_INDEX = "/";
    public $ROUTING_LIST = [
        "/" => "home.php",
    ];

    protected static $_instance = null;

    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self;
            self::$_instance->init();
        }
        return self::$_instance;
    }

    public function getName() {
        return $this->pluginName;
    }

    public function getType() {
        return $this->pluginType;
    }

    public function getViewByPath(string $path) {}

    public function init() {
        throw new Exception("No init() method in plugin.");
    }

    protected function __clone() {}

    protected function __construct() {}
}*/