<?php

use Bono\App;

$cfg  = [];
$path = __DIR__ . DIRECTORY_SEPARATOR . App::getInstance()->config('mode');

if ($handle = opendir($path)) {
    while (false !== ($entry = readdir($handle))) {
        $pathToFile = $path . DIRECTORY_SEPARATOR . $entry;

        if (is_file($pathToFile)) {
            $content = require_once($pathToFile);
            $cfg     = array_merge_recursive($cfg, $content);
        }
    }

    closedir($handle);
}

return $cfg;
