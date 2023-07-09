<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\UsersController;
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
Route::group(['middleware' => ['auth','cekLevel:kasir,owner']], function(){
  Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('checkLogin')->name('dashboard');

});
//dashboard kasir
Route::get('/kasir', [dashboardController::class, 'kasir'])->middleware('checkLogin')->name('dashboardkasir');
// Route::get('/dashboard', 'dashboardController@index')->middleware('checkLogin');

//login route
Route::get('/sesi', [sessionController::class, 'index'])->name('login')->middleware('checkTamu');
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
//hapus order selesai
Route::get('/deletepesanan/{id}',[CheckoutController::class, 'delete'])->name('delete.pesanan');

//tampil di modal keranjang
Route::get('/menu/{id}',[Menucontroller::class, 'tampildimodal'])->name('tampilmodal');

//tambah ke keranjang
//tampil detail menu
Route::get('/keranjang/{id}',[CheckoutController::class, 'tampil'])->name('checkouttampil');
//tambah item
Route::post('/keranjang/tambahitem',[CheckoutController::class, 'tambahitem'])->name('tambahitem');

//CRUD User
//tampil
Route::get('/users',[UsersController::class, 'tampil'])->name('tampiluser');
//byid
Route::get('/tampiluser/{id}',[UsersController::class, 'tampilbyid'])->name('tampiluserbyid');
//tambah baru user
Route::post('/insertuser',[UsersController::class, 'tambah'])->name('tambahuser');
//edit user
Route::post('/edituser/{id}',[UsersController::class, 'edituser']);
//hapus user
Route::get('/deleteuser/{id}',[UsersController::class, 'deleteuser'])->name('deleteuser');
//tampil meja
// Route::get('/menu',[MejaController::class, 'index'])->name('tampil.menu');

//pesanan
Route::get('/pesanan',[CheckoutController::class, 'tampilsemua'])->name('tampil.pesanan');
Route::get('/cetakform',[CheckoutController::class, 'cetakstrukform'])->name('tampil.form');
Route::get('/struk/{no_meja}',[CheckoutController::class, 'struk']);
//pesanan selesai tampil
Route::get('/selesai',[CheckoutController::class, 'tampilselesai'])->name('tampil.selesai');
Route::get('/allpesanan/{id}',[CheckoutController::class, 'allpesanan'])->name('tampil.all');
//ubah status pesanan
Route::put('/ubahstatus/{id}',[CheckoutController::class, 'ubahstatus'])->name('order.ubahstatus');


