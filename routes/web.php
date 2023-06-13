<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\Trash\CategoryTrashController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\Trash\PostTrashController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Role\Trash\RoleTrashController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Tag\Trash\TagTrashController;
use App\Http\Controllers\Admin\User\Role\RoleUserController;
use App\Http\Controllers\Admin\User\Trash\UserTrashController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Personal\PersonalController;
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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('auth');

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('main.index');
    Route::get('/show/{post}', [IndexController::class, 'show'])->name('main.show');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/show/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/show/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/show/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

        Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function () {
            Route::get('/', [CategoryTrashController::class, 'index'])->name('admin.category.trash.index');
            Route::post('/{id}/restore', [CategoryTrashController::class, 'restore'])->name('admin.category.trash.restore');
            Route::delete('/{id}/force', [CategoryTrashController::class, 'force'])->name('admin.category.trash.force');
        });
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::get('/show/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/show/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/show/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}/destroy', [TagController::class, 'destroy'])->name('admin.tag.destroy');

        Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function () {
            Route::get('/', [TagTrashController::class, 'index'])->name('admin.tag.trash.index');
            Route::post('/{id}/restore', [TagTrashController::class, 'restore'])->name('admin.tag.trash.restore');
            Route::delete('/{id}/force', [TagTrashController::class, 'force'])->name('admin.tag.trash.force');
        });
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('/show/{post}', [PostController::class, 'show'])->name('admin.post.show');
        Route::get('/show/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/show/{post}', [PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}/destroy', [PostController::class, 'destroy'])->name('admin.post.destroy');

        Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function () {
            Route::get('/', [PostTrashController::class, 'index'])->name('admin.post.trash.index');
            Route::post('/{id}/restore', [PostTrashController::class, 'restore'])->name('admin.post.trash.restore');
            Route::delete('/{id}/force', [PostTrashController::class, 'force'])->name('admin.post.trash.force');
        });
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/show/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/show/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/show/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');

        Route::group(['namespace' => 'User', 'prefix' => 'role'], function () {
            Route::get('/{user}/edit', [RoleUserController::class, 'show'])->name('admin.user.role.edit');
            Route::patch('/{user}', [RoleUserController::class, 'update'])->name('admin.user.role.update');
        });

        Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function () {
            Route::get('/', [UserTrashController::class, 'index'])->name('admin.user.trash.index');
            Route::post('/{id}/restore', [UserTrashController::class, 'restore'])->name('admin.user.trash.restore');
            Route::delete('/{id}/force', [UserTrashController::class, 'force'])->name('admin.user.trash.force');
        });
    });

    Route::group(['namespace' => 'Role', 'prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/show/{role}', [RoleController::class, 'show'])->name('admin.role.show');
        Route::get('/show/{role}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::patch('/show/{role}', [RoleController::class, 'update'])->name('admin.role.update');
        Route::delete('/{role}/destroy', [RoleController::class, 'destroy'])->name('admin.role.destroy');

        Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function () {
            Route::get('/', [RoleTrashController::class, 'index'])->name('admin.role.trash.index');
            Route::post('/{id}/restore', [RoleTrashController::class, 'restore'])->name('admin.role.trash.restore');
            Route::delete('/{id}/force', [RoleTrashController::class, 'force'])->name('admin.role.trash.force');
        });
    });
});

Route::group(['namespace' => 'Personal', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/', [PersonalController::class, 'index'])->name('user.index');

});

Auth::routes();
