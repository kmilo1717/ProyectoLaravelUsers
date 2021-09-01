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
    return redirect('usuario');
});

Route::get('/usuario/crear', [App\Http\Controllers\UsuarioController::class, 'crear'])->name('usuario.create');
Route::post('/usuario/salvar', [App\Http\Controllers\UsuarioController::class, 'registrar'])->name('usuario.save');
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'view'])->name('usuarios');
Route::get('/usuario/edit/{id}', [App\Http\Controllers\UsuarioController::class, 'gestion'])->name('usuario.edit');
Route::get('/usuario/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'eliminar'])->name('usuario.delete');
Route::post('/usuario/actualizar', [App\Http\Controllers\UsuarioController::class, 'actualizar'])->name('usuario.update');

