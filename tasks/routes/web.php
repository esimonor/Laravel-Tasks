<?php

use Illuminate\Support\Facades\Route;

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

// Take all the resources (index, show, destroy, etc)
Route::resource('/user', UserController::class);

// Take all the resources (index, show, destroy, etc)
Route::resource('/tasks', TaskController::class);

//Show index of the page
Route::get('/', 'TaskController@index');

//Delete something from the database, needs the ID
Route::post('/tasks/{id}', 'TaskController@destroy');
/*
    Route::post('/create', 'TaskController@store');
    Route::delete('/delete/{id}', 'TaskController@destroy');
*/