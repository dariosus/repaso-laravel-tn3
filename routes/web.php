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

Route::get("/categorias", "CategoriesController@index");

Route::get("/buscarProductos", "ProductsController@search");

Route::get('/', function () {
    return view('welcome');
});


Route::get("/marcas", "BrandsController@index");
Route::get("/productos", "ProductsController@index");

Route::get("/marcas/{id}", "BrandsController@show");
Route::get("/categorias/{id}", "CategoriesController@show");
Route::get("/productos/{id}", "ProductsController@show");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
