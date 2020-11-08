<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function () {
    return $var = Str::random(32);
});

$router->get('books', 'BooksController@index');

$router->get('books/{id}', 'BooksController@cariId');