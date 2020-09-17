<?php

// Load Config
require_once 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function ($className) {
    // className with fileName should be the same
    require_once 'libraries/' . $className . '.php';
});
