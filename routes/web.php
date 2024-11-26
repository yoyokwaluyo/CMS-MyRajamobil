<?php

use App\Http\Controllers\ArsipdoController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaServiceController;
use App\Http\Controllers\MyprospectController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ProspekController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestdriveController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'where' => ['language' => '[a-zA-Z]{2}']], function () {
    // Public Routes (Only accessible if not logged in)
    Route::middleware('guest')->group(function () {
        Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'showLoginForm')->name('login');
            Route::post('/login', 'login');
            Route::get('/register', 'showRegistrationForm')->name('register');
            Route::post('/register', 'register'); 
        });
    });

    // Protected Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        
        Route::controller(ServiceController::class)->group(function () {
            Route::get('/permintaan-service', 'index')->name('requestservice');
            Route::get('/permintaan-service/data', 'getData')->name('requestservice.data');
            Route::get('/permintaan-service/{id}', 'show')->name('requestservice.show');
            Route::get('/input-service', 'inputService')->name('requestservice.input');

            Route::get('/permintaan-service-sa', 'index')->name('requestservice.sa');
            Route::get('/permintaan-service-sa/data', 'getDataSa')->name('requestservice.datasa');
            Route::get('/permintaan-service-sa/{id}', 'show')->name('requestservice.showsa');
            Route::get('/input-service-sa', 'inputServiceSa')->name('requestservice.inputsa');
            
        });
        
        Route::controller(TestdriveController::class)->group(function () {
            Route::get('/permintaan-testdrive', 'index')->name('requesttestdrive');
            Route::get('/permintaan-testdrive/data', 'getData')->name('requesttestdrive.data');
            Route::get('/permintaan-testdrive/{id}', 'show')->name('requesttestdrive.show');
        });

        Route::get('/tambah-prospek', [ProspekController::class, 'index'])->name('addprospect');
        Route::get('/prospek-saya/{slug}', [MyprospectController::class, 'index'])->name('myprospect');
        Route::get('/prospek-detail/{id}/{slug}', [MyprospectController::class, 'detail'])->name('myprospect.detail');
        Route::get('/arsip-do/{slug}', [ArsipdoController::class, 'index'])->name('arsipdo');
        
        Route::controller(PromoController::class)->group(function () {
            Route::get('/promo', 'index')->name('promo');
            Route::get('/tambah-promo', 'addPromo')->name('promo.add');
        });

        Route::controller(KelolaServiceController::class)->group(function () {
            Route::get('/kelola-service', 'index')->name('kelolaservice');
        });

        Route::controller(WorkshopController::class)->group(function () {
            Route::get('/operasional', 'index')->name('operasional');
            Route::get('/tentang-bengkel', 'tentang')->name('about.workshop');
            Route::get('/sales-advisor', 'salesAdvisor')->name('salesadvisor');
            Route::get('/sales-advisor/data', 'getDataSa')->name('salesadvisor.datasa');
            Route::get('/sales-advisor/tambah', 'addSalesAdvisor')->name('salesadvisor.add');
        });

        Route::controller(VoucherController::class)->group(function () {
            Route::get('/list-klaim-voucher', 'listclaim')->name('voucher.listclaim');
            Route::get('/list-klaim-voucher/data', 'getData')->name('voucher.listdata');

            Route::get('/input-voucher', 'inputVoucher')->name('voucher.inputvoucher');
            Route::get('/input-voucher/data', 'getDataInput')->name('voucher.listdatainput');
            Route::get('/input-voucher/tambah', 'addVoucher')->name('voucher.addVoucher');
            Route::get('/input-voucher/master-zone', 'masterZone')->name('voucher.zone');
            Route::get('/input-voucher/passcode', 'passcode')->name('voucher.passcode');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/kategori', 'category')->name('product.category');
            Route::get('/kategori/data', 'getDataCategory')->name('product.datacategory');
            Route::get('/kategori/tambah', 'addCategory')->name('product.addcategory');

            Route::get('/produk-list', 'productList')->name('product.list');
            Route::get('/produk-list/data', 'getDataList')->name('product.datalist');
            Route::get('/produk-list/tambah', 'addList')->name('product.addlist');
        });

        Route::controller(PostingController::class)->group(function () {
            Route::get('/banner', 'banner')->name('posting.banner');
            Route::get('/banner/data', 'getDataBanner')->name('posting.databanner');
            Route::get('/banner/tambah', 'addBanner')->name('posting.addbanner');
        });
        
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});