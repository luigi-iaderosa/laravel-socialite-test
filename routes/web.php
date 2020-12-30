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

Route::get('/', function () {
    return view('welcome');
});


//ask for login through github 
Route::get('/signin/github','App\Http\Controllers\Auth\LoginController@github');

//redirect from github wants a proper redirect page on this server
Route::get('/signin/github/redirect','App\Http\Controllers\Auth\LoginController@githubRedirect');



