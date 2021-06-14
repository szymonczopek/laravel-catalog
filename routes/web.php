<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::get('/orders/edit/{order}', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
Route::post('/orders/edit/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
Route::get('/orders/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.destroy');

