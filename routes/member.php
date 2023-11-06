<?php

use App\Http\Controllers\Member\BlogController;
use App\Http\Controllers\Member\MemberController;
use Illuminate\Support\Facades\Route;


//Private Routes
Route::middleware(['preventBackHistory', 'member'])->group(function () {
    //Blog
    Route::group(['prefix' => 'member/blog'], function () {
        Route::get('/index', [BlogController::class, 'index'])->name('member.blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('member.blog.create');
        Route::post('/store', [BlogController::class, 'store'])->name('member.blog.store');
        Route::get('/{blog_id}/edit', [BlogController::class, 'edit'])->name('member.blog.edit');
        Route::put('/{blog_id}/update', [BlogController::class, 'update'])->name('member.blog.update');
        Route::put('/update-status', [BlogController::class, 'updateStatus'])->name('member.blog.update.status');
    });

    //members
    Route::get('member/member-list', [MemberController::class, 'index'])->name('member.list.index');
    Route::get('member/view-member/{user_id}', [MemberController::class, 'viewMemberData'])->name('member.viewMemberData');

    Route::get('member/member-blog-list', [MemberController::class, 'memberBlogList'])->name('member.memberBlogList');
    Route::get('member/view-member-blog/{blog_id}', [MemberController::class, 'viewMemberBlog'])->name('member.viewMemberBlog');

    //Gallery
    Route::get('member/gallery-list', [MemberController::class, 'memberGallery'])->name('member.gallery.index');
});
