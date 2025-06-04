<?php
require_once '../config/config.php';
require_once '../config/normalize.php';
require_once '../database/connection.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/ApiController.php';

use App\Core\Router;

$router = new Router();

require_once '../routes/web.php';
require_once '../routes/api.php';

// $router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);
