<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Main\IndexController;
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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});

Auth::routes();
