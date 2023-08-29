<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;


//Private Routes
Route::middleware(['preventBackHistory', 'admin'])->group(function () {

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/index', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category_id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category_id}/update', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::put('/update-status', [CategoryController::class, 'updateStatus'])->name('admin.category.update.status');
    });

    //Blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/index', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/{blog_id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/{blog_id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::put('/update-status', [BlogController::class, 'updateStatus'])->name('admin.blog.update.status');
    });
});
