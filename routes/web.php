<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Basic page routes for the app's blade views
Route::get('/dasboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/inventory', [PageController::class, 'inventory'])->name('inventory');
Route::get('/orders', [PageController::class, 'orders'])->name('orders');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/reporting', [PageController::class, 'reporting'])->name('reporting');
Route::get('/suppliers', [PageController::class, 'suppliers'])->name('suppliers');

// Resourceful controllers for CRUD
// Keep the legacy route names used by the views (inventory, products, orders, suppliers)
Route::get('/inventory', [ProductController::class, 'index'])->name('inventory');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::resource('products', ProductController::class)->except(['index']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::resource('orders', OrderController::class)->except(['index']);

Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers');
Route::resource('suppliers', SupplierController::class)->except(['index']);

// Authentication routes: register & login (guest only)
Route::middleware('guest')->group(function () {
    Route::get('/', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

// Logout (requires auth)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
