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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/contacts', [
    'uses' => 'ContactController@index',
    'as' => 'contact.index',
    'middleware' => 'auth'
]);

Route::post('/contacts/create', [
    'uses' => 'ContactController@create',
    'as' => 'contact.create',
    'middleware' => 'auth'
]);

Route::patch('/contacts/update/{id}', [
    'uses' => 'ContactController@update',
    'as' => 'contact.update',
    'middleware' => 'auth'
]);

Route::get('/contacts/delete/{id}',[
    'uses' => 'ContactController@destroy',
    'as' => 'contact.delete',
    'middleware' => 'auth'
]);

Route::get('/contacts/edit/{id}', [
    'uses' => 'ContactController@edit',
    'as' => 'contact.edit',
    'middleware' => 'auth'
]);

Route::patch('/contacts/photo/{id}',[
    'uses' => 'ContactController@addPhoto',
    'as' => 'contact.photo',
    'middleware' => 'auth',
]);

