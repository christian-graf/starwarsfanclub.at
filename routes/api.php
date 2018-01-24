<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* @var \Illuminate\Routing\Router $router */

$router->get('/api', function () {
    return response()->json('welcome');
});

$router->get('/user', function (Request $request) {
    return $request->user();
});
