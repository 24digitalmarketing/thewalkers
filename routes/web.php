<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\AjaxRequestController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\HomeModelController;
use App\Http\Controllers\TagsModelController;

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

Route::controller(IndexController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::get('/cache', function () {
    Artisan::call('cache:clear');
    dd('cache cleard successfully');
});
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    dd('route cache successfully');
});


Route::controller(AjaxRequestController::class)->name('frontend.')->group(function () {
    Route::post('/front-ajax', 'frontAjaxRequest')->name('frontAjaxRequest');
});

Route::controller(BlogController::class)->name('frontend.')->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{slug}', 'blogDetails')->name('blogDetails');
});


Route::controller(ContactController::class)->name('frontend.')->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'save')->name('contact-save');
});


Route::controller(BlogCommentController::class)->name('frontend.')->group(function () {
    Route::post('/save-comment', 'addComment')->name('addComment');
});


Route::controller(StaticPageController::class)->name('frontend.')->group(function () {
    Route::get('/about-us', 'aboutUs')->name('aboutUs');
    Route::get('/terms-and-conditions', 'termsConditions')->name('termsConditions');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
});




// =================== Admin Dashboard Started =================

// [================== Login Page Route  Start ==================]
// [================== Login Page Route  Start ==================]

Route::controller(Login::class)->group(function () {
    Route::get('/ad-min', 'index')->name('login-view');
    Route::post('/ad-min', 'login')->name('login-check');
    Route::post('/otp-verification', 'loginOtpVerification')->name('login-otp-verification');
    Route::get('/reset-otp-verification', 'resetOtpVerification')->name('reset-otp-verification');

    // ================== Reset Passowrd =============
    Route::get('/reset-password', 'showPasswordResetPage')->name('showPasswordResetPage');
    Route::post('/reset-password', 'passwordResetCheckUser')->name('passwordResetCheckUser');
    Route::post('/reset-password-otp-check', 'passwordResetOtpCheck')->name('passwordResetOtpCheck');
    Route::get('/cancel-reset-password', 'cancelPasswordReset')->name('cancelPasswordReset');
    Route::post('/update-passwordd', 'updatePassword')->name('updatePassword');
    Route::get('/goto-login', 'GotoLogin')->name('GotoLogin');
});


// [================== Login Page Route  End ==================]
// [================== Login Page Route  End ==================]


Route::middleware('adminLogin')->group(function () {

    // ********************* Delete All Controller Start **********************
    Route::controller(DeleteAllController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/deleteall', 'deleteAll')->name('deleteAll');
    });
    // ********************* Delete All Controller End **********************

    // ******************* Admin Contact Route Start *************
    Route::controller(ContactController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/contact', 'adminIndex')->name('contactIndex');
        Route::get('/contact-datatable-data', 'getContactData')->name('getContactData');
    });
    // ******************* Admin Contact Route End *************


    Route::controller(AjaxRequestController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::post('/ajax-request', 'ajaxRequest')->name('ajaxRequest');
    });


    Route::controller(TrashController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/trash/{trash_of}', 'Trash')->name('Trash');
        Route::get('/get-trash-data', 'getTrashData')->name('getTrashData');
    });

    // ============ Media route start ============
    Route::controller(MediaController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-media', 'index')->name('addMediaIndex');
        Route::post('/add-media', 'save')->name('saveMediaIndex');
        Route::get('/show-media', 'mediaIndex')->name('mediaIndex');
        Route::get('/edit-media/{id}', 'editMedia')->name('editMedia');
        Route::post('/edit-media/{id}', 'updateMedia')->name('updateMedia');
        Route::get('/media-datatable-data', 'getMediaData')->name('getMediaData');
    });
    // ============ Media route End ============

    // ***************** Admin Index Page  Route Start**************************

    Route::controller(AdminIndexController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', 'index')->name('indexView');
        Route::get('/logout', 'logout')->name('logout');
    });

    // ***************** Admin Index Page  Route End**************************

    Route::controller(BlogCategoryController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/blog-category', 'index')->name('adminBlogCategory');
        Route::post('/blog-category', 'save')->name('adminBlogCategorySave');
        Route::get('/blog-category-edit/{id}', 'show')->name('adminBlogCategoryShow');
        Route::post('/blog-category-edit/{id}', 'update')->name('adminBlogCategoryUpdate');
    });
    Route::controller(TagsModelController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/tag', 'addTag')->name('addTag');
        Route::post('/tag', 'saveTag')->name('saveTag');
        Route::get('/tag-edit/{id}', 'editTag')->name('editTag');
        Route::post('/tag-edit/{id}', 'updateTag')->name('updateTag');
    });

    Route::controller(BlogController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-blog', 'addBlogIndex')->name('adminAddBlog');
        Route::post('/add-blog', 'addBlogSave')->name('addBlogSave');
        Route::get('/view-blogs', 'viewBlogs')->name('viewblogs');
        Route::get('/edit-blob/{id}', 'editBlog')->name('editBlog');
        Route::post('/edit-blog/{id}', 'updateBlog')->name('updateBlog');
        Route::get('/blog-datatable-data', 'getBlogData')->name('getBlogData');
    });

    Route::controller(BlogCommentController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/show-comments', 'showComment')->name('showComment');
        Route::get('/comment-datatable-data', 'getCommentData')->name('getCommentData');
    });


    Route::controller(MetaController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-meta', 'index')->name('addMeta');
        Route::post('/add-meta', 'save')->name('addMetaSave');
        Route::get('/view-meta', 'show')->name('showMeta');
        Route::get('/edit-meta/{id}', 'editMeta')->name('editMeta');
        Route::post('/edit-meta/{id}', 'updateMeta')->name('updateMeta');
    });



    Route::controller(HomeModelController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/home-page', 'homePage')->name('homePage');
        Route::post('/home-page-save', 'homePageSave')->name('homePageSave');
    });
});

// [================== Adming Route End ==================]
// [================== Adming Route End ==================]
