<?php

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

    // PUT altera por completo
    // PATCH altera por partes
    // DELETE
    // GET
    // POST

$router->get('/', function () use ($router) {
    return 'Api Encomendei v1 ... ' . $router->app->version();
   // return \App\Product::all();
});

$router->group(['prefix' => 'product'], function () use($router) { 
    $router->get('/', 'ProductController@index');
    $router->get('/{$product}', 'ProductController@show');
    $router->post('/', 'ProductController@store');
    $router->put('/{$product}', 'ProductController@store');
    $router->delete('/{$product}', 'ProductController@destroy');
});

$router->group(['prefix' => 'auth'], function () use($router) { 
    $router->post('/', 'AuthController@login');
});

/*
$router->group(['prefix' => 'user'], function () { 
    $router->get('/', 'ProductController@index');
    $router->get('/{$product}', 'ProductController@show');
    
    $router->post('/', 'ProductController@store');
    $router->put('/{$product}', 'ProductController@store');
    $router->delete('/{$product}', 'ProductController@destroy');
});
*/