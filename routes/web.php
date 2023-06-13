<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('landing/meja');
// });
//masuk nomor meja
Route::get('/', [LandingController::class, 'meja']);
Route::get('/dashboard', [dashboardController::class, 'index']);

Route::get('/sesi', [sessionController::class, 'index']);
Route::post('/sesi/login', [sessionController::class, 'login']);
Route::get('/sesi/logout', [sessionController::class, 'logout']);

Route::resource('menus', 'MenuController');

Route::post('/pesanan/simpan',[pesananController::class, 'simpanPesanan'])->name('simpan.pesanan');

Route::post('/order/add',[OrderController::class, 'store'])->name('simpan.order');

//tampil menu setelah input meja
Route::get('/menu',[Menucontroller::class, 'index'])->name('tampil.menu');
//insert data menu / tambah
Route::post('/insertmenu',[Menucontroller::class, 'store']);
//tampil menu di admin
Route::get('/menus',[Menucontroller::class, 'admin'])->name('menus');
//edit menu tampil dulu 
Route::get('/tampilmenu/{id}',[Menucontroller::class, 'tampil'])->name('tampil');
Route::post('/editmenu/{id}',[Menucontroller::class, 'editdata'])->name('tampil');

//hapus menu
Route::get('/delete/{id}',[Menucontroller::class, 'delete'])->name('delete');




//tampil meja
// Route::get('/menu',[MejaController::class, 'index'])->name('tampil.menu');

