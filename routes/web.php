<?php

use App\Controllers\HomeController;

$app->get('/', HomeController::class);
$app->get('/home', HomeController::class . ':home');
