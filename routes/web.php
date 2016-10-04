<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dsfs', function () {
    return view('client/home/home');
});

Auth::routes();

Route::get('/dsf', 'HomeController@index');



/*
|--------------------------------------------------------------------------
| Client Web Routes
|--------------------------------------------------------------------------
| Home
| Telefoon
| Tablet
| informatie
| contact
*/

Route::group(['namespace' => 'Client'], function() {
    // Controllers Within The "App\Http\Controllers\Client" Namespace
    Route::get('/',             'ContentController@homePage');
    Route::get('/informatie',   'ContentController@infoPage');
    Route::get('/contact',      'ContentController@contactPage');

    Route::get('/merken/type/{type}',                      'ContentController@brandsOnType');
    Route::get('/toestellen/merk/{brand}/type/{type}',                      'ContentController@devicesOnBrandAndType');
    Route::get('/toestellen/{device}',                      'ContentController@deviceDetails');

    Route::get('/toestellen/{device}/type/{type}',       'ContentController@deviceOnType');
});
