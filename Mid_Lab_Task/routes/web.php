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
Route::post('/registration','Registration@registerVerify');


Route::get('/system/product_management/existing_products', 'Product@existingProductsView');

    Route::get('/system/product_management/edit/existing_products/{id}','Product@exEdit')->name('product.exEdit');
    Route::post('/system/product_management/edit/existing_products/{id}','Product@exUpdate');

    Route::get('/system/product_management/delete/existing_products/{id}','Product@exDelete')->name('product.exDelete');
    Route::post('/system/product_management/delete/existing_products/{id}','Product@exDestroy');

    Route::get('/system/product_management/details/existing_products/{id}','Product@exShow')->name('product.exShow');

    
    
    Route::get('system/product_management/upcoming_products', 'Product@upcomingProductsView');

    Route::get('/system/product_management/edit/upcoming_products/{id}','Product@upEdit')->name('product.upEdit');
    Route::post('/system/product_management/edit/upcoming_products/{id}','Product@upUpdate');

    Route::get('/system/product_management/delete/upcoming_products/{id}','Product@upDelete')->name('product.upDelete');
    Route::post('/system/product_management/delete/upcoming_products/{id}','Product@upDestroy');

    Route::get('/system/product_management/details/upcoming_products/{id}','Product@upShow')->name('product.upShow');



    Route::get('system/product_management/add_product', 'Product@addProductView');
    Route::post('system/product_management/add_product', 'Product@store');