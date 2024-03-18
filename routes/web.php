<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('kamus', [\App\Http\Controllers\KamusController::class, 'index'])->name('kamus');
Route::get('translate', [\App\Http\Controllers\TranslateController::class, 'index'])->name('translate');
Route::get('about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('pembelajaran', [\App\Http\Controllers\PembelajaranController::class, 'index'])->name('pembelajaran');
Route::get('pembelajaran/{pembelajaran:slug}', [\App\Http\Controllers\PembelajaranController::class, 'modul'])->name('pembelajaran.modul');
Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('blog/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
