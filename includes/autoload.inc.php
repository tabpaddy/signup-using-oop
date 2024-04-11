<?php
    // spl_autoload_register('myAutoLoader');

    // function myAutoLoader($className){
    //     $path = "classes/";
    //     $extension = ".classes.php";
    //     $fullPath = $path . $className . $extension;

    //     if (!file_exists($fullPath)) {
    //         return false;
    //     }

    //     include_once $fullPath;
    // }

    // Autoload classes based on namespace and file path
spl_autoload_register(function($className) {
    $file = __DIR__ . "/../classes/" . $className . ".classes.php";
    if (file_exists($file)) {
        include_once $file;
    }
});

?>