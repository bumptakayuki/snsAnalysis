<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function () {
    return 'this page may only be viewed by managers';
}]);

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::resource('articles', 'ArticlesController');

Route::resource('events', 'EventsController');

Route::get('/analysis', 'EventsController@analysis');


//Route::auth();

Route::get('/home', 'HomeController@index');




//Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => 'guest:webadmin'], function () { //←このグループで括る
        Route::get('/admin/login','AdminAuthController@showLoginForm');
        Route::post('/admin/login','AdminAuthController@login');
    });

    Route::group(['middleware' => 'auth:webadmin'], function () { //←このグループで括る
        Route::get('/admin/home','AdminHomeController@index');
    });

    Route::get('/admin/logout','AdminAuthController@logout');

    Route::auth();
    Route::get('/home', 'HomeController@index');
//});