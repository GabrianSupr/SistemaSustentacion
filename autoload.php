<?php

spl_autoload_register(function ($class) {
    $file = __DIR__ . "/script/" . $class . ".php";
    if (file_exists($file)) {
        require $file;
    }
});

?>
