<?php

use App\Http\Controllers\layout;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WongkitoController;
use App\Models\Customer;
use App\Models\Produk;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
//         return view('landing.index');
// });
Route::get('/', [layout::class, 'index']);

Route::get('/loginadmin', [LoginController::class, 'showLoginForm'])->name('loginadmin');
Route::post('/loginadmin', [LoginController::class, 'loginadmin']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

route::controller(layout::class)->group(function(){
    route::get('/layout/index','index')->name('index');
    //  route::get('/admin/gallery','gallery')->name('gallery');
    // route::get('/admin/customer','customer')->name('customer');
    // route::get('/admin/produk','produk')->name('produk');
    // route::get('/admin/addproduk','addproduk')->name('addproduk');
    // route::get('/admin/addgallery','addgallery')->name('addgallery');
    
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/customer', [layout::class, 'customer'])->name('customer');
    Route::get('/adminpage', [layout::class, 'adminpage'])->name('adminpage');
    route::get('/addproduk',[layout::class,'addproduk'])->name('addproduk');
    route::get('/addgallery',[layout::class,'addgallery'])->name('addgallery');
    route::get('/produk',[ProdukController::class,"produk"])->name('produk');
    route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
});
route::get('/hapus-produk/{id}',[ProdukController::class,"destroy"])->name('hapus-produk');
route::get('/hapus-gallery/{id}',[GalleryController::class,"destroy"])->name('hapus-gallery');
route::get('/delete-customer/{id}',[WongkitoController::class,"destroy"])->name('delete-customer');

route::post('/editproduk/{id}',[ProdukController::class,"update"])->name('update');
route::post('/editgallery/{id}',[GalleryController::class,"update"])->name('update');
route::post('/customer/{id}',[WongkitoController::class,"update"])->name('update');
route::post('/customer',[WongkitoController::class,"store"])->name('SimpanCustomer');
route::post('/addproduk',[ProdukController::class,"store"])->name('SimpanProduk');
route::post('/addgallery',[GalleryController::class,"store"])->name('SimpanGallery');
route::get('/editproduk/{id}',[ProdukController::class,'edit'])->name('edit');
route::get('/editgallery/{id}',[GalleryController::class,'edit'])->name('edit');