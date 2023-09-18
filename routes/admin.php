<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationRequestController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectFollowUpController;
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

    //Project Follow-up
    Route::group(['prefix' => 'project-follow-up'], function () {
        Route::get('/index', [ProjectFollowUpController::class, 'index'])->name('admin.project_follow_up.index');
        Route::get('/create', [ProjectFollowUpController::class, 'create'])->name('admin.project_follow_up.create');
        Route::post('/store', [ProjectFollowUpController::class, 'store'])->name('admin.project_follow_up.store');
        Route::get('/{project_follow_up_id}/edit', [ProjectFollowUpController::class, 'edit'])->name('admin.project_follow_up.edit');
        Route::put('/{project_follow_up_id}/update', [ProjectFollowUpController::class, 'update'])->name('admin.project_follow_up.update');
        Route::put('/update-status', [ProjectFollowUpController::class, 'updateStatus'])->name('admin.project_follow_up.update.status');
    });

    //Donation Request
    Route::group(['prefix' => 'donation-request'], function () {
        Route::get('/index', [DonationRequestController::class, 'index'])->name('admin.donation_request.index');
        Route::get('/create', [DonationRequestController::class, 'create'])->name('admin.donation_request.create');
        Route::post('/store', [DonationRequestController::class, 'store'])->name('admin.donation_request.store');
        Route::get('/{donation_request_id}/edit', [DonationRequestController::class, 'edit'])->name('admin.donation_request.edit');
        Route::put('/{donation_request_id}/update', [DonationRequestController::class, 'update'])->name('admin.donation_request.update');
        Route::put('/update-status', [DonationRequestController::class, 'updateStatus'])->name('admin.donation_request.update.status');
    });
});
