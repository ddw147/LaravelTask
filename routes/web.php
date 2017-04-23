<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function() {
	Route::get('/', 'HomeController@index');

    Route::resource('users','UserController');
	Route::post('users-block/{user}','UserController@block_user')->middleware('role:admin');
	Route::post('users-unblock/{user}','UserController@unblock_user');


	Route::get('change-password','UserController@showchangepassword');
	Route::post('change-password','UserController@updatepassword');

	Route::get('message/inbox','MessageController@inbox');
	Route::get('message/sent','MessageController@sent');
	Route::get('message/create','MessageController@create');
	Route::post('message/store','MessageController@store');

	Route::get('message/all-messages','MessageController@all')->middleware('role:admin');

	Route::post('message/{message}/delete', 'MessageController@destroy')->middleware('role:admin');

});


Auth::routes();

Route::get('/home',  function () {
    return view('index');
});

