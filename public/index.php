<?php

require __DIR__ . "/../loader.php";

foreach ($loadedPlugins as $plugin) {
    echo "<b>OwO</b> " . $plugin->getName() . " was loaded uwu<br />";
}
