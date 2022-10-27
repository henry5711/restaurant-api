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
})->name('hola');

Route::get('rols/store', function () {
    return view('rol_form');
})->name('store_rol_rol');

Route::get('rols/update', function () {
    return view('rol_edit');
})->name('update_rol_rol');


Route::get('category/store', function () {
    return view('categorystore');
})->name('store_category');

Route::get('product/store', function () {
    return view('product_store');
})->name('store_product_from');


