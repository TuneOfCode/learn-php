<?php
function myAutoload($className) {
    $filename = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    include($filename);
}

spl_autoload_register('myAutoload');
