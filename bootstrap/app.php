<?php

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Create Container using PHP-DI
$container = new Container();

// Set container to create App with on AppFactory
AppFactory::setContainer($container);

$container->set('settings', function () {
    return [
        'app' => [
            'name' => 'R-and-t-back',
        ]
        ];
});

$app = AppFactory::create();

require_once __DIR__ . '/../routes/web.php';