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
    return view('auth.login');
});

Route::get('empleados/pdf',[App\Http\Controllers\EmpleadoController::class, 'pdf'])->name('empleados.pdf');
Route::get('clientes/pdf',[App\Http\Controllers\ClienteController::class, 'pdf'])->name('clientes.pdf');
Route::get('maquinarias/pdf',[App\Http\Controllers\MaquinariaController::class, 'pdf'])->name('maquinarias.pdf');
Route::get('proyectos/pdf',[App\Http\Controllers\ProyectoController::class, 'pdf'])->name('proyectos.pdf');

Route::resource('empleados','App\Http\Controllers\EmpleadoController');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('gastos','App\Http\Controllers\GastoController');
Route::resource('gastoplanillas','App\Http\Controllers\GastoplanillaController');
Route::resource('tipogastos','App\Http\Controllers\TipogastosController');
Route::resource('maquinarias','App\Http\Controllers\MaquinariaController');
Route::resource('proyectos','App\Http\Controllers\ProyectoController');
Route::resource('users','App\Http\Controllers\UserController');


Route::middleware([
    'auth:sanctum', 'verified'])->get('/dash', function () {
        return view('dash.index');
    })->name('dash');

