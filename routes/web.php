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

// Route::get('/',function () {
//     return view('home');
// });

Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');

Route::post('cards/{card}/notes','NotesController@store');
Route::get('notes/{note}/edit','NotesController@edit');
Route::patch('notes/{note}','NotesController@update');

Auth::routes();

Route::get('/','RootController@index');
Route::post('contactus','RootController@store');


Route::get('admin', function () {
    return view('admin_template');
});
Route::get('test', 'TestController@index');

// Route::get('/','RootController@services');
