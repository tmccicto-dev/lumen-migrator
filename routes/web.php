<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

//bpl_taxassessment
$router->get('/bpl_taxassessment/migrate', 'MigratorController@bpl_taxassessment');

//bpl_business_profile
$router->get('/bpl_business_profile/migrate', 'MigratorController@bpl_business_profile');