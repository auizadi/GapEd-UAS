<?php

use App\Http\Controllers\adminController;
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
Route::get('/Form', function () {
    return view('form');
})->name('form');

Route::post('/form', [formController::class, 'storeform'])->name('form');

//admin
Route::get('/admin', function () {
    return view('loginAdmin');
})->name('loginAdmin');

Route::post('/login/auth', [adminController::class, 'login'])->name('login');



Route::get('/Dashboardadmin', function () {
    return view('dashboardAdmin');
})->name('dashboardAdmin');

Route::get('/selamat', function(){
    return view('storeForm');
})->name('selamat');