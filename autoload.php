<?php

function autoloader($className) {
    require_once __DIR__ . '/src/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
}

spl_autoload_register('autoloader');