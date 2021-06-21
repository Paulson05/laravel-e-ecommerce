<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Auth::routes();
Route::get('/admin',[AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::resource('banner', BannerController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::resource('brand', BrandController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::resource('product', ProductController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::resource('category', CategoryController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');

//Route::prefix('user')->group(function (){
//
//    Route::middleware(['guest' ])->group(function (){
//        Route::get('/login', [UserController::class, 'login'])->name('user.login');
//        Route::get('/register', [UserController::class, 'register'])->name('user.register');
//        Route::post('/create', [UserController::class, 'create'])->name('user.create');
//
//
//    });
//    Route::middleware(['auth:web' ])->group(function (){
//        Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
//
//    });
//});
