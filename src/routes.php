<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/volunteer', 'volunteer', ['namespace' => 'Blupl\Volunteer\Http\Controllers'], function (Router $router) {

        $router->get('create', 'VolunteerController@create');
});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Volunteer\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'volunteer'], function (Router $router) {
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
