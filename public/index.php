<?php

    require_once __DIR__.'/../vendor/autoload.php';
    use app\core\Application;

    $app = new Application();

    // Here you can define many routes as you want
    
    $app->router->get('/', function(){

        return 'hello world';
    });

    $app->router->get('/users', function(){

        return 'this is users';
    });

    $app->run();