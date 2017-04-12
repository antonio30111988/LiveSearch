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
\Event::listen('illuminate.query',function($query){
	 // var_dump($query);
});

\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    var_dump($query->sql);
    var_dump($query->bindings);
    var_dump($query->time);
});

\DB::listen(function($query) { 

  // Log this
  //echo $query->sql; 


});
Route::get('/', 'SearchController@index');
Route::get('/search', 'SearchController@search');
