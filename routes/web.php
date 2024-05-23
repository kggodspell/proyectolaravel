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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros','nosotros')->name('nosotros');

/*Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');//para establecer una ruta

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');//ruta *post* para enviar datos desde formulario de manera oculta sin enviarlos por url

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');//para establecer una ruta por url con medio de una variable

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('curso/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}','show');
//});*/