<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke($request, $response)
    {
        $response->getBody()->write('Works');
        return $response;
    }

    public function home($request, $response)
    {
        $response->getBody()->write($this->c->get('settings')['app']['name']);
        return $response;
    }
}