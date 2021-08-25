<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\FormularioController;
use App\Http\Controllers\Admin\ListaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CursoController::class, 'cursos']);
Route::get('/crud', [FormularioController::class, 'formulario']);
Route::get('/lista', [ListaController::class, 'lista'])->name('cursos.listar');

Route::post('/salvar', [FormularioController::class, 'adicionar'])->name('cursos.adicionar');
