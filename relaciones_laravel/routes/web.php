<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ClientesController;
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

Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');

Route::get('/rol', [RolesController::class, 'index'])->name('role.index');
Route::get('/rol/create', [RolesController::class, 'create'])->name('role.create');
Route::post('/rol/store', [RolesController::class, 'store'])->name('role.store');

Route::get('/cliente', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/cliente/store', [ClientesController::class, 'store'])->name('clientes.store');