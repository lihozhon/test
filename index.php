<?php
require_once "vendor/autoload.php";
use src\core\Router;
use src\controllers\Home;

$router = new Router();
$router->run();

