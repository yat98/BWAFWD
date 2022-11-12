<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;

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

Route::get('/', [HomeController::class,'index'])
    ->name('home');

Route::get('detail/{travel_package:slug}', [DetailController::class,'index'])
    ->name('detail');

Route::group(['middleware' => ['auth','verified','admin']], function(){
    Route::post('checkout/{travel_package}', [CheckoutController::class,'process'])
        ->name('checkout.process');

    Route::get('checkout/{transaction}', [CheckoutController::class,'index'])
        ->name('checkout.index');

    Route::post('checkout/create/{transaction}', [CheckoutController::class,'create'])
        ->name('checkout.create');

    Route::get('checkout/remove/{transaction_member}', [CheckoutController::class,'remove'])
        ->name('checkout.remove');
    
    Route::get('checkout/confirm/{transaction}', [CheckoutController::class,'success'])
        ->name('checkout.success');
});


Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => ['auth','verified','admin']], function() {
    Route::get('/',[DashboardController::class,'index'])
        ->name('dashboard');
    Route::resource('travel-package', TravelPackageController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('transaction', TransactionController::class);
});

Auth::routes(['verify' => true]);