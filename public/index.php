<?php

require '../config/dev.php';
require '../vendor/autoload.php';
require '../config/tinyMCE/tinymce/js/tinymce/tinymce.min.js';
session_start();
$router = new App\config\router();
$router->run();

?>
