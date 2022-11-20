<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MallaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ProgramaAdemicoController;
use App\Http\Controllers\MatriculaController;
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
    return redirect(route("login"));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ver/facultad', [FacultadController::class, 'mostrar_facultad'])->middleware("auth");
Route::post('/guardar/facultad', [FacultadController::class, 'reg_facultad'])->middleware("auth");
Route::get('/ver/form/facultad', [FacultadController::class, 'mostrarform_facu'])->middleware("auth");

Route::get('/ver/carrera', [CarreraController::class, 'mostrar_carrera'])->middleware("auth");
Route::post('/guardar/carrera', [CarreraController::class, 'reg_carreras'])->middleware("auth");
Route::get('/ver/form/carrera', [CarreraController::class, 'mostrarform_carr'])->middleware("auth");

Route::get('/ver/cursos', [CursoController::class, 'mostrar_cusos'])->middleware("auth");
Route::post('/guardar/cursos', [CursoController::class, 'reg_cursos'])->middleware("auth");
Route::get('/ver/form/cursos', [CursoController::class, 'mostrarform_curso'])->middleware("auth");

Route::get('/ver/mallas', [MallaController::class, 'mostrar_malla'])->middleware("auth");
Route::post('/guardar/mallas', [MallaController::class, 'reg_mallas'])->middleware("auth");
Route::get('/ver/form/mallas', [MallaController::class, 'mostrarform_malla'])->middleware("auth");

Route::get('/ver/docentes', [DocenteController::class, 'mostrar_docente'])->middleware("auth");
Route::post('/guardar/docentes', [DocenteController::class, 'reg_docentes'])->middleware("auth");
Route::get('/ver/form/docentes', [DocenteController::class, 'mostrarform_docn'])->middleware("auth");

Route::get('/ver/programas', [ProgramaAdemicoController::class, 'mostrar_prog_acada'])->middleware("auth");
Route::post('/guardar/programas', [ProgramaAdemicoController::class, 'reg_prog_acada'])->middleware("auth");
Route::get('/ver/form/programas', [ProgramaAdemicoController::class, 'mostrarform_prog_acada'])->middleware("auth");

Route::get('/ver/matriculas', [MatriculaController::class, 'mostrar_matri'])->middleware("auth");
Route::post('/guardar/matriculas', [MatriculaController::class, 'reg_matri'])->middleware("auth");
Route::get('/ver/form/matriculas', [MatriculaController::class, 'mostrarform_motri'])->middleware("auth");