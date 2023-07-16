<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/edit-user', function () {
    return view('dashboard.edit-user');
});
//route register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//route login
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/loginauth', [AuthController::class, 'auth'])->name('auth');

//route table
Route::get('/index', [AdminController::class, 'indexData'])->name('index');
// Route::get('/indexData', [AdminController::class, 'indexUsers'])->name('indexUser');
Route::post('/indexs', [AdminController::class, 'storedata'])->name('data');


Route::get('/table',[AdminController::class, 'indexTable'])->name('table');

Route::get('/editData/{id}', [AdminController::class, 'indexEditData'])->name('indexEditData');
Route::post('update/{id}', [AdminController::class, 'updateData'])->name('updateData');
Route::post('/delete/{id}', [AdminController::class, 'destroy'])->name('destroy');

//route logout
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/konsekuensi', function (){
return view('dashboard.konsekuensi');
});
