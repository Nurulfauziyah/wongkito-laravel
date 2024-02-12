<?php

use App\Http\Controllers\layout;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WongkitoController;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/loginadmin', [LoginController::class, 'showLoginForm'])->name('loginadmin');
Route::post('/loginadmin', [LoginController::class, 'loginadmin']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

route::controller(layout::class)->group(function(){
    route::get('/layout/index','index')->name('index');
    // route::get('/admin/customer','customer')->name('customer');
    // route::get('/admin/adminpage','adminpage')->name('adminpage');
    route::get('/admin/produk','produk')->name('produk');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/customer', [layout::class, 'customer'])->name('customer');
    Route::get('/adminpage', [layout::class, 'adminpage'])->name('adminpage');
    route::post('/customer/{id}',[WongkitoController::class,"update"])->name('update');
});
route::get('/delete-customer/{id}',[WongkitoController::class,"destroy"])->name('delete-customer');
route::post('/customer',[WongkitoController::class,"store"])->name('SimpanCustomer');
