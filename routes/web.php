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

$router->get('/posts/get-request-json', 'PostsController@getRequestJson');
$router->get('/posts/get-request-xml', 'PostsController@getRequestXml');
$router->get('/posts/post-request-json', 'PostsController@postRequestJson');
$router->get('/posts/post-request-xml', 'PostsController@postRequestXml');
$router->get('/comments/get-comments', 'CommentsController@getAll');
$router->get('/profiles/get-profile', 'ProfilesController@getProfilesbyId');

$router->get('/employees', 'EmployeesController@getAll');
$router->get('/employee-by-id', 'EmployeesController@getById');
$router->get('/employee-post', 'EmployeesController@create');
$router->get('/employee-update', 'EmployeesController@update');
$router->get('/employee-delete', 'EmployeesController@delete');
