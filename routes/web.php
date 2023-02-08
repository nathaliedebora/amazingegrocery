<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('user/')->name('user.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/item-detail/{id}', [DashboardController::class, 'itemDetail'])->name('item-detail');
        Route::post('/store-cart', [CartController::class, 'store']);
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'update']);
        Route::get('/cart', [CartController::class, 'index'])->name('cart');
        Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
        Route::get('/delete/{id}', [CartController::class, 'delete'])->name('delete-checkout');
    });
});

Route::group(['middleware' => 'isAdmin'], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/account-maintenance', [UserController::class, 'index'])->name('account-maintenance');
        Route::get('/update-profile/{id}', [UserController::class, 'create'])->name('update-profile');
        Route::post('/update-profile', [UserController::class, 'update']);
        Route::get('/delete-profile/{id}', [UserController::class, 'delete'])->name('delete-profile');
    });
});

Route::get('/checkout-success', function () {
    return view('checkout-success');
})->name('checkout-success');

require __DIR__.'/auth.php';
