<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//rutas para rol de usuarios
Route::get('rol_user/index', [App\Http\Controllers\RolUserController::class, 'index'])
    ->name('index_rol');

Route::get('prev/{id}', [App\Http\Controllers\RolUserController::class, 'prevupdate'])
    ->name('prev');

Route::get('rol_user/{id}', [App\Http\Controllers\RolUserController::class, 'show'])
    ->name('showrol');

Route::post('rol_user/store', [App\Http\Controllers\RolUserController::class, 'store'])
    ->name('store_real_rols');

Route::post('rol_user/update/{id}', [App\Http\Controllers\RolUserController::class, 'update'])
    ->name('rols_update');

Route::get('rol_user/delete/{id}', [App\Http\Controllers\RolUserController::class, 'destroy'])
    ->name('delete_rols');


//rutas de usuario
Route::post('user', [App\Http\Controllers\UsuariosController::class, 'store'])
    ->name('api.v1.contacts.index');
Route::get('user', [App\Http\Controllers\UsuariosController::class, 'index'])
    ->name('api.v1.contacts.index');
Route::get('user/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])
    ->name('api.v1.contacts.index');
Route::post('user/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])
    ->name('api.v1.contacts.index');


//routes categoty
Route::get('category/index', [App\Http\Controllers\CategoryController::class, 'index'])
    ->name('index_category');

Route::get('prev/{id}', [App\Http\Controllers\CategoryController::class, 'prevupdate'])
    ->name('prev');

Route::get('category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])
    ->name('show_category');

Route::post('category/store', [App\Http\Controllers\CategoryController::class, 'store'])
    ->name('store_real_category');

Route::post('category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])
    ->name('category_update');

Route::get('category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])
    ->name('delete_category');


//routes Productos
Route::get('product/index', [App\Http\Controllers\ProductsController::class, 'index'])
    ->name('index_product');

Route::post('product/store', [App\Http\Controllers\ProductsController::class, 'store'])
    ->name('store_product');

Route::get('product/delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])
    ->name('delete_product');

Route::post('product/update/{id}', [App\Http\Controllers\ProductsController::class, 'update'])
    ->name('product_update');

Route::get('prev/{id}', [App\Http\Controllers\ProductsController::class, 'prevupdate'])
    ->name('prev_product');
