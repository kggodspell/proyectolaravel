<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');
//para establecer una ruta
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
//
Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
//para establecer una ruta por url con medio de una variable*/


/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}','show');
});*/