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

/*
GET /projects (index)
GET /projects/create (create)
GET /projects/{project} (show)
POST /projects (store)
GET /projects/{project}/edit (edit)
PATCH / projects/{project} (update)
DELETE /projects/{project} (destroy)
*/
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::resource('home','HomeController');

/*Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/form1', 'HomeController@form1');

Route::post('/home', 'HomeController@store1');

Route::get('/home/{id}', 'HomeController@show');

Route::get('/home/{id}/edit', 'HomeController@edit');

Route::patch('/home/{id}', 'HomeController@update');

Route::delete('/home/{id}', 'HomeController@destroy');*/

Route::get('/MoscowMain','PagesController@MoscowMain');

Route::get('/schools','SchoolsController@index');