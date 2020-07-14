<?php

require_once __DIR__ . '/vendor/autoload.php';


if(!file_exists(__DIR__ . "/config.json")) {
    die("no config file");
}

$configData = json_decode(file_get_contents(__DIR__ . "/config.json"), true);
$fullyExpandedFileBasePath = __DIR__ . "/public/" . $configData["filePath"];

$pluginNameList = array_diff(scandir(__DIR__ . '/plugins'), ['.', '..']);

$loadedPlugins = [];

foreach ($pluginNameList as $pluginName) {
    if(file_exists(__DIR__ . "/plugins/" . $pluginName . "/plugin.php")) {
        require __DIR__ . "/plugins/" . $pluginName . "/plugin.php";
        $loadedPlugins[$pluginName] = eval("return " . $pluginName . "::getInstance();"); // Yes. Dirty. I am aware.
    }
}


