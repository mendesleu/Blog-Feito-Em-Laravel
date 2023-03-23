<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoticiasController;
use App\Models\Categorias;
use App\Models\Noticias;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/quemsomos', [IndexController::class, 'quemsomos'])->name('quemsomos');

Route::get('/noticias/{id}', [NoticiasController::class, 'noticias'])->name('noticias');

Route::get('/categorias/{id}', [CategoriasController::class, 'categorias'])->name('categorias');