<?php

// trick to listen SQL performed
DB::listen(function($query){
	var_dump($query->sql, $query->bindings);
});

App\User::all();


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

Route::get('/', function () {
  return view('welcome');
});


Route::get('sucess', function(){
	// here we signup user

	//the flash message
	//Session::flash('status', 'Welcome');	
	// session()->flash('error', 'Error');
	// session()->flash('notice', 'Welcome');

	// we created flash() method in app/helpers.php
	flash('You are signed in', 'sucess');
	return redirect('/');
});

Route::get('notice', function(){
	flash('You are signed in', 'notice');
	return redirect('/');
});

Route::get('error', function(){
	flash('You are signed in', 'error');
	return redirect('/');
});

Route::get('posts', 'PostsController@index');
Route::get('show', 'PostsController@show');
Route::get('test', 'PostsController@test');

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
