<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'showSobre'])->name('sobre');

Route::get('/indique', [App\Http\Controllers\IndiqueController::class, 'showIndique'])->name('indique');

Route::get('/fale_conosco', [App\Http\Controllers\FaleConoscoController::class, 'showFaleConosco'])->name('fale_conosco');
