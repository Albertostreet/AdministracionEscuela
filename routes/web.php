<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PivoteController;
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

Route::get('/', [EstudianteController::class, 'seleccionarTodo'])->name('estudiantes.seleccionarTodo');

//manda todos los datos de la tabla estudiante de la base de datos
Route::get('/estudianteSeleccionarTodo', [EstudianteController::class, 'seleccionarTodo'])->name('estudiantes.seleccionarTodo');

//Manda el form para agregar un estudiante
Route::get('/estudianteAgregarForm', [EstudianteController::class, 'agregarForm'])->name('estudiantes.agregarForm');
//Manda los datos del estudiante agregado
Route::post('/estudianteAgregar', [EstudianteController::class, 'agregar'])->name('estudiantes.agregar');

//Muestra los datos del estudiante en un form
Route::get('/estudianteEditarForm/{codigo}', [EstudianteController::class, 'editarForm'])->name('estudiantes.editarForm');
//Manda los datos para ser actualizados
Route::post('/estudianteEditar', [EstudianteController::class, 'editar'])->name('estudiantes.editar');

//Elimina un estudiante
Route::post('/estudianteEliminar', [EstudianteController::class, 'eliminar'])->name('estudiantes.eliminar');

//Seleccionar un estudiante
Route::post('/estudianteSeleccionar', [EstudianteController::class, 'seleccionar'])->name('estudiantes.seleccionar');