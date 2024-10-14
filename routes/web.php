<?php

use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
// User

Route::get('/', function () {
    return view('client.home');
})->name('client.home');

    Route::get('/san-pham', function () {
        return view('client.sanpham');
    });
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('user.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginUserController::class, 'create'])->name(name: 'user.login');
    Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');


Route::middleware('auth')->group(function () {
    // Các route yêu cầu người dùng đã đăng nhập
    Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
});




// Phân quyền admin
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');
Route::get('/admin/category-list', function () {
    return view('admin.danhmuc.list');
});
Route::controller(BrandController::class)
    ->prefix('brand')
    ->group(function () {
        Route::get('list', 'index')->name('brand.list');
        Route::get('search', 'search')->name('brand.search');
        Route::get('create', 'create')->name('brand.create');
        Route::post('store', 'store')->name('brand.store');
        Route::get('edit/{id}', 'edit')->name('brand.edit');
        Route::post('update/{id}', 'update')->name('brand.update');
        Route::delete('delete/{id}', 'destroy')->name('brand.destroy');
    });

Route::controller(CategoryController::class)
    ->prefix('danhmuc')
    ->group(function () {
        Route::get('list', 'index')->name('danhmuc.list');
        Route::get('search', 'search')->name('danhmuc.search');
        Route::get('create', 'create')->name('danhmuc.create');
        Route::post('store', 'store')->name('danhmuc.store');
        Route::get('{id}/edit', 'edit')->name('danhmuc.edit');
        Route::post('{id}/update', 'update')->name('danhmuc.update');
        Route::delete('{id}/destroy', 'destroy')->name('danhmuc.destroy');
    });

Route::controller(ProductController::class)
    ->prefix('product')
    ->group(function () {
        Route::get('list', 'index')->name('product.index');
        Route::get('search', 'search')->name('product.search');
        Route::get('create', 'create')->name('product.create');
        Route::post('store', 'store')->name('product.store');
        Route::get('edit/{id}', 'edit')->name('product.edit');
        Route::post('edit/{id}', 'update')->name('product.update');
        Route::delete('delete/{id}', 'destroy')->name('product.destroy');
    });

Route::controller(UserController::class)
    ->prefix('user')
    ->group(function () {
        Route::get('list', 'index')->name('user.list');
        Route::get('search', 'search')->name('user.search');
        Route::get('create', 'create')->name('user.create');
        Route::post('store', 'store')->name('user.store');
        Route::get('{id}/edit', 'edit')->name('user.edit');
        Route::post('{id}/update', 'update')->name('user.update');
        Route::delete('{id}/destroy', 'destroy')->name('user.destroy');
    });



