<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ObatController;
use \App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);


Route::resource('obat', ObatController::class)->middleware('auth');
Route::post('/obat/saveDataFieldObat', [ObatController::class, 'saveDataFieldObat'])->name('obat.saveDataFieldObat')->middleware('auth');
Route::post('/obat/changeImageObat', [ObatController::class, 'changeImageObat'])->name('obat.changeImageObat')->middleware('auth');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
