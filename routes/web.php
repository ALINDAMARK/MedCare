<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Basic page routes for the app's blade views
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/inventory', [PageController::class, 'inventory'])->name('inventory');
Route::get('/orders', [PageController::class, 'orders'])->name('orders');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/reporting', [PageController::class, 'reporting'])->name('reporting');
Route::get('/suppliers', [PageController::class, 'suppliers'])->name('suppliers');
