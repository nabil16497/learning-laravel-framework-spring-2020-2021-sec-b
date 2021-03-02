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
Route::get('/login','Login@login');
Route::post('/login','Login@verify');
Route::get('/home','Home@home');
Route::get('/logout', 'Logout@logout');
Route::get('/registration','Registration@register');
Route::post('/registration','Registration@registeerVerify');