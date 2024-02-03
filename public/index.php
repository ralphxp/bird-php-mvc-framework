<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__));

// Here you can define many routes as you want

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'getForm']);
$app->router->post('/contact', [SiteController::class, 'handleForm']);

$app->run();