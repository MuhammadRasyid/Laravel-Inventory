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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/crew', function () {
    return view('crew.index');
});

Route::get('/' , 'PageController@home');
Route::get('/login' , 'PageController@login');
Route::get('/crewa' , 'PageController@crew');
