<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuditoriaController;



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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/auditorias', [AuditoriaController::class, 'index'])->name('auditorias.index');

Route::resource('usuarios', UsuarioController::class);
Route::get('/usuarios/{id}/edit', 'UsuarioController@edit')->name('usuarios.edit');
Route::resource('tareas', 'TareaController');
Route::resource('proyectos', ProyectoController::class);
Route::get('tareas/{tarea}', [TareaController::class, 'show'])->name('tareas.show');
Route::resource('tareas', TareaController::class);
Route::resource('reportes', ReporteController::class);


