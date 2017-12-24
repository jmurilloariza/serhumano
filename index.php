<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/utility/respuesta.php';
require_once 'app/router/router.php';

$router = new Router();
$router->router();

 ?>