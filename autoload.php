<?php

function autoload($className) {    
    $filename = __DIR__ . "/controller/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
    $filename = __DIR__ . "/model/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
spl_autoload_register('autoload');
