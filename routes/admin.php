<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\VolunteerController;
use Illuminate\Support\Facades\Route;


//Private Routes
Route::middleware(['preventBackHistory', 'admin'])->group(function () {

    //project
    Route::group(['prefix' => 'project'], function () {
        Route::get('/index', [ProjectController::class, 'index'])->name('admin.project.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('admin.project.create');
        Route::post('/store', [ProjectController::class, 'store'])->name('admin.project.store');
        Route::get('/{project_id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::put('/{project_id}/update', [ProjectController::class, 'update'])->name('admin.project.update');
        Route::put('/update-status', [ProjectController::class, 'updateStatus'])->name('admin.project.update.status');
    });

    //event
    Route::group(['prefix' => 'event'], function () {
        Route::get('/index', [EventController::class, 'index'])->name('admin.event.index');
        Route::get('/create', [EventController::class, 'create'])->name('admin.event.create');
        Route::post('/store', [EventController::class, 'store'])->name('admin.event.store');
        Route::get('/{event_id}/edit', [EventController::class, 'edit'])->name('admin.event.edit');
        Route::put('/{event_id}/update', [EventController::class, 'update'])->name('admin.event.update');
        Route::put('/update-status', [EventController::class, 'updateStatus'])->name('admin.event.update.status');
    });

    //member
    Route::group(['prefix' => 'member'], function () {
        Route::get('/index', [MemberController::class, 'index'])->name('admin.member.index');
        Route::get('/create', [MemberController::class, 'create'])->name('admin.member.create');
        Route::post('/store', [MemberController::class, 'store'])->name('admin.member.store');
        Route::get('/{member_id}/edit', [MemberController::class, 'edit'])->name('admin.member.edit');
        Route::put('/{member_id}/update', [MemberController::class, 'update'])->name('admin.member.update');
        Route::put('/update-status', [MemberController::class, 'updateStatus'])->name('admin.member.update.status');
    });

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

    //Volunteer
    Route::group(['prefix' => 'volunteer'], function () {
        Route::get('/index', [VolunteerController::class, 'index'])->name('admin.volunteer.index');
        Route::get('/create', [VolunteerController::class, 'create'])->name('admin.volunteer.create');
        Route::post('/store', [VolunteerController::class, 'store'])->name('admin.volunteer.store');
        Route::get('/{volunteer_id}/edit', [VolunteerController::class, 'edit'])->name('admin.volunteer.edit');
        Route::put('/{volunteer_id}/update', [VolunteerController::class, 'update'])->name('admin.volunteer.update');
        Route::put('/update-status', [VolunteerController::class, 'updateStatus'])->name('admin.volunteer.update.status');
    });
});
