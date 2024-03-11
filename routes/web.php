<?php

use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});

Route::get('/series', [SeriesController::class, 'index']);

Route::get('/series/criar', [SeriesController::class, 'create']);

Route::post('/series', [SeriesController::class, 'store']);

Route::delete('/series/{id}', [SeriesController::class, 'destroy']);

Route::get('series/{id}/editar', [SeriesController::class, 'edit']);

Route::put('series/{id}', [SeriesController::class, 'update']);