<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
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

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/show/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/show/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/show/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::get('/show/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/show/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/show/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}/destroy', [TagController::class, 'destroy'])->name('admin.tag.destroy');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('/show/{post}', [PostController::class, 'show'])->name('admin.post.show');
        Route::get('/show/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/show/{post}', [PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}/destroy', [PostController::class, 'destroy'])->name('admin.post.destroy');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/show/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/show/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/show/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });

    Route::group(['namespace' => 'Role', 'prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/show/{role}', [RoleController::class, 'show'])->name('admin.role.show');
        Route::get('/show/{role}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::patch('/show/{role}', [RoleController::class, 'update'])->name('admin.role.update');
        Route::delete('/{role}/destroy', [RoleController::class, 'destroy'])->name('admin.role.destroy');
    });
});

Auth::routes();
