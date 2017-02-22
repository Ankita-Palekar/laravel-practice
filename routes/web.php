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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/about', function () {
//    different types of views.
    //    return view('pages.about');
    //    return view('pages/about');
    $people = ['Ankita', 'Apurva', 'Aditi'];
    return view('pages.about', compact('people'));
});


Route::get('/aboutview', 'pagesController@show');


Route::get('/hi', function ($id = 0) {
	return $id;    
})->name('welcome1');

Route::get('/redirect', function () {
	// $url = route('welcome1e');
	return redirect()->route('welcome1');
});

Route::get('/user/{id}', 'UserController@show');

