<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\dataReg;
use App\Http\Controllers\formController;
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

//landin page
Route::get('/', function () {
    return view('index');
});


//formulir

Route::get('/form', [formController::class, 'index'])->name('form');
Route::post('/form/post', [formController::class, 'storeform'])->name('store');

//admin
Route::get('/admin', [adminController::class, 'index'])->name('admin');

Route::post('/login/auth', [adminController::class, 'login'])->name('login');
Route::get('/login/dashboard', [dashboard::class, 'index'])->name('dashboard');





