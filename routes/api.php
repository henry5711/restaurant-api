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
Route::get('rol_user/index/{id}', [App\Http\Controllers\RolUserController::class, 'index'])
        ->name('index_rol');

Route::get('rol_user/form', [App\Http\Controllers\RolUserController::class, 'formpost'])
        ->name('store_rols');

 Route::get('prev/{id}', [App\Http\Controllers\RolUserController::class, 'prevupdate'])
        ->name('prev');

Route::get('rol_user/{id}', [App\Http\Controllers\RolUserController::class, 'show'])
        ->name('showrol');

Route::post('rol_user', [App\Http\Controllers\RolUserController::class, 'store'])
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

