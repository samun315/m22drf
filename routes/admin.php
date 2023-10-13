<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationRequestController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectFollowUpController;
use App\Http\Controllers\Admin\SliderController;
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

    //blog category
    Route::group(['prefix' => 'blog-category'], function () {
        Route::get('/index', [BlogCategoryController::class, 'index'])->name('admin.blog.category.index');
        Route::get('/create', [BlogCategoryController::class, 'create'])->name('admin.blog.category.create');
        Route::post('/store', [BlogCategoryController::class, 'store'])->name('admin.blog.category.store');
        Route::get('/{blog_category_id}/edit', [BlogCategoryController::class, 'edit'])->name('admin.blog.category.edit');
        Route::put('/{blog_category_id}/update', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
        Route::put('/update-status', [BlogCategoryController::class, 'updateStatus'])->name('admin.blog.category.update.status');
    });

    //Blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/index', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/{blog_id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/{blog_id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::put('/update-status', [BlogController::class, 'updateStatus'])->name('admin.blog.update.status');
        Route::put('/update-blog-type', [BlogController::class, 'updateBlogType'])->name('admin.blog.type.update');
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

    //Notice
    Route::group(['prefix' => 'notice'], function () {
        Route::get('/index', [NoticeController::class, 'index'])->name('admin.notice.index');
        Route::get('/create', [NoticeController::class, 'create'])->name('admin.notice.create');
        Route::post('/store', [NoticeController::class, 'store'])->name('admin.notice.store');
        Route::get('/{notice_id}/edit', [NoticeController::class, 'edit'])->name('admin.notice.edit');
        Route::put('/{notice_id}/update', [NoticeController::class, 'update'])->name('admin.notice.update');
        Route::put('/update-status', [NoticeController::class, 'updateStatus'])->name('admin.notice.update.status');
    });

    //Slider
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/index', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::get('/{slider_id}/edit', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::put('/{slider_id}/update', [SliderController::class, 'update'])->name('admin.slider.update');
        Route::put('/update-status', [SliderController::class, 'updateStatus'])->name('admin.slider.update.status');
    });

    //Partner
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/index', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('/create', [PartnerController::class, 'create'])->name('admin.partner.create');
        Route::post('/store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::get('/{partner_id}/edit', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::put('/{partner_id}/update', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::put('/update-status', [PartnerController::class, 'updateStatus'])->name('admin.partner.update.status');
    });

    //Setting
    Route::group(['prefix' => 'home-setting'], function () {

        //Mission & Vision Setting
        Route::get('/mission-vision', [HomeSettingController::class, 'showMissionVisionForm'])->name('admin.setting.showMissionVisionForm');
        Route::put('/mission-vision/update', [HomeSettingController::class, 'updateMissionVision'])->name('admin.setting.updateMissionVision');

        //Footer Setting
        Route::get('/footer', [HomeSettingController::class, 'showFooterForm'])->name('admin.footerSetting.showFooterForm');
        Route::put('/footer/update', [HomeSettingController::class, 'updateFooter'])->name('admin.footerSetting.updateFooter');
    });

    //About us Setting
    Route::get('setting/about-us', [AboutUsController::class, 'showAboutUsForm'])->name('admin.aboutUsSetting.showAboutUsForm');
    Route::put('setting/about-us/update', [AboutUsController::class, 'updateAboutUs'])->name('admin.aboutUsSetting.updateAboutUs');
});
