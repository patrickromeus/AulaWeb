<?php

use App\Http\Controllers\ApicartasController;
use App\Http\Controllers\CartasController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('login', [
    logincontroller::class,
    'autenticar'
])->name('login');

Route::get('logout', [
    LoginController::class,
    'logout'
])->name('logout');


Route::get('/bemvindo', [
    LoginController::class,
    'bemvindo'
])->name('bemvindo');

Route::prefix('/cartas')->group(function () {

    Route::get('/', [CartasController::class, 'index'])->name('cartas.index');


    Route::get(
        '/inserir',
        [CartasController::class, 'inserir']
    )->name('cartas.inserir');

     Route::post(
        '/inserir',
        [CartasController::class, 'inserir']
    )->name('cartas.gravar');

    // novo campo para editar carta 
 Route::get ('/editar/{carta}', [CartasController::class, 'editar'])->name('cartas.editar');
 Route::put ('/editar/{carta}', [CartasController::class, 'editar'])->name('cartas.atualizar');

  // para excluir routa
 Route::get ('/excluir/{carta}', [CartasController::class, 'excluir'])->name('cartas.excluir');
 Route::delete ('/excluir/{carta}', [CartasController::class, 'excluir'])->name('cartas.deletar');

});
 
Route::prefix('/api/cartas')->group(function(){ 
    Route::get('/', [ApicartasController::class, 'index']);

    Route::get('/{carta}', [ApicartasController::class, 'show']);

    Route::post('/', [ApicartasController::class, 'store']);
});