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

Route::delete("/borrarProducto", "ProductsController@delete")->middleware("admin");

Route::get("/wishlist", "ProductsController@wishlist");

Route::post("/agregarWishlist", "ProductsController@addWishlist");
Route::post("/quitarWishlist", "ProductsController@removeWishlist");

Route::get("/categorias", "CategoriesController@index");

Route::get("/buscarProductos", "ProductsController@search");

Route::get('/', function () {
    return view('welcome');
});

Route::get("/agregarProducto", "ProductsController@add")->middleware("auth");
Route::post("/agregarProducto", "ProductsController@store")->middleware("auth");

Route::get("/registerAdmin", "MyRegisterController@addAdmin")->middleware("admin");
Route::post("/registerAdmin", "MyRegisterController@saveAdmin")->middleware("admin");


Route::get("/marcas", "BrandsController@index");
Route::get("/productos", "ProductsController@index");

Route::get("/marcas/{id}", "BrandsController@show");
Route::get("/categorias/{id}", "CategoriesController@show");
Route::get("/productos/{id}", "ProductsController@show");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
