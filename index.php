<?php

// Autoloader function
function myAutoloader($className) {
    include_once 'classes/' . $className . '.php';
}
// Register the autoloader function
spl_autoload_register('myAutoloader');



// Now you can use classes without manual includes
$obj = new MyClass();
$obj->sayHello();
