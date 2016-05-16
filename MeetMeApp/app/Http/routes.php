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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('ini', 'HomeController@index');*/

Route::group(['middleware' => 'web'], function(){
	Route::auth();
	Route::get('/', 'WelcomeController@index');
	Route::get('/home', 'HomeController@index');
	Route::get('/crear', 'EventController@create');

	/*usamos un grupo de rutas*/
	Route::group(['prefix' => 'eventos'], function(){

		Route::resource('event', 'EventController');
	});
});

//Route::get('login',['as' => 'logueo', 'uses' => 'LoginController@show']);