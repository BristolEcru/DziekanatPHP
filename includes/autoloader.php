<?php
spl_autoload_register(function ($className) {
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $path = '';

    if (strpos($url, 'includes') !== false) {
        $path = '../';
    }
    if (strpos($url, 'classes') !== false) {
        $path = '../';
    }

    $path .= 'classes/' . $className . '.php';

    if (file_exists($path)) {
        require_once $path;
    }
});

    
