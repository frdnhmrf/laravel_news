<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Models\Berita;

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
Route::get('',[BeritaController::class, 'home'])->name('home');

Route::get('/berita',[BeritaController::class, 'index'])->name('berita');

Route::get('/tambahberita',[BeritaController::class, 'tambahberita'])->name('tambahberita');
Route::post('/insertdataberita',[BeritaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[BeritaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[BeritaController::class, 'updatedata'])->name('updatedata');


Route::get('/delete/{id}',[BeritaController::class, 'delete'])->name('delete');


Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');


Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/datakategori',[KategoriController::class, 'index'])->name('datakategori');
Route::get('/tambahkategori',[KategoriController::class, 'create'])->name('tambahkategori');

Route::post('/insertdatakategori',[KategoriController::class, 'store'])->name('insertdatakategori');

