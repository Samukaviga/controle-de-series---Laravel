<?php

use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    
    return redirect('/series');

})->middleware(Autenticador::class);


Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series', [SeriesController::class, 'store']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);
Route::get('/series/{id}/editar', [SeriesController::class, 'edit']);
Route::put('/series/{id}', [SeriesController::class, 'update']);

Route::get('/series/{id}/temporadas', [TemporadasController::class, 'index']);

Route::get('/temporadas/{id}/episodios', [EpisodiosController::class, 'index']);
Route::put('/temporadas/{id}/episodios', [EpisodiosController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logar']);

Route::get('/usuarios/criar', [UsuariosController::class, 'create']);
Route::post('/usuarios', [UsuariosController::class, 'store']);




