<?php
// loader file
require_once '../utils/autoload.php';

// Helper file
require_once __DIR__ . '/../utils/helpers.php';

// load the '.env' file
require_once __DIR__ . '/../utils/env.php';
loadEnv();


// the normalizer
require_once '../config/normalize.php';

// establichement of the connection with the database
require_once '../database/connection.php';

// our route file
require_once '../app/core/Router.php';

// the super controller
require_once '../app/core/Controller.php';

// customer files...
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/ApiController.php';

use App\Core\Router;

$router = new Router();

require_once '../routes/web.php';
require_once '../routes/api.php';

// $router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);
