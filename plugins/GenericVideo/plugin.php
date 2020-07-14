<?php


class GenericVideo {
    const PLUGIN_NAME = "Generic Video";
    const PLUGIN_TYPE = "MediaProvider";

    const ROUTING_INDEX = "/video/";
    const ROUTING_LIST = [
        "/video/" => "list.php",
        "/video/list" => "list.php"
    ];

    private $videos = [];

    private $videoData = [];

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
        return self::PLUGIN_NAME;
    }

    public function getType() {
        return self::PLUGIN_TYPE;
    }

    public function getViewByPath(string $path) {}

    public function init() {

    }

    public function getVideoList() {
        $directories = array_diff(scandir($fullyExpandedFileBasePath . "/videos/"), ['.', '..']);
    }

    public function getDeepVideoInfo(string $name) {

    }

    protected function __clone() {}

    protected function __construct() {}
}