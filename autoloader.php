<?php

function my_autoload_function($className)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

spl_autoload_register('my_autoload_function');

$user = new User(); // This will trigger autoloading of User.php

