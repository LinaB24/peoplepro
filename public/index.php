<?php
require_once '../core/App.php';
require_once '../core/Controller.php';

spl_autoload_register(function($class) {
    if (file_exists("../models/$class.php")) {
        require_once "../models/$class.php";
    }
});

$app = new App();
