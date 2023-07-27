<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::middleware(['guest'])->group(function () {
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'register_action'])->name('register.action');
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'login_action'])->name('login.action');
    Route::get('favorit', [UserController::class, 'favorit'])->name('favorit');
    Route::get('deskripsi', [UserController::class, 'deskripsi'])->name('deskripsi');
    Route::get('peraturan', [UserController::class, 'peraturan'])->name('peraturan');
    Route::get('fasilitas', [UserController::class, 'fasilitas'])->name('fasilitas');
    Route::get('sewa', [UserController::class, 'sewa'])->name('sewa');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/kos/{id_kos}', [ProductController::class, 'showCategory']);


// Route::get('/', function () {
//     return view('welcome');
// });
