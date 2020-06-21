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

Route::get('channel/{id}', 'UserController@get_channel');

//Route::get('store/{id}', 'ShowProducts@get_products');

Route::get('show/products', 'ShowProducts@get_all_products');

Route::get('new/product', function () {
    $data = ["Ejemplo" => 1];
    return view('pages.createProduct')->with('data', $data);;
});
Route::get('show/stores', function () {
    $products = ["Ejemplo" => 1];
    return view('pages.tiendasHome')->with('products', $products);;
});