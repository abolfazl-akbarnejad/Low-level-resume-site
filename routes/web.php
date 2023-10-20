<?php

use App\Http\Controllers\Admin\CallController;
use App\Http\Controllers\Admin\CallSettingController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileSettingController;
use App\Http\Controllers\Admin\ProfileSettingPersian;
use App\Http\Controllers\Admin\ProfileSettingPersianController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Application\ApplicationController;
use App\Http\Middleware\ChecKAdmin;
use App\Http\Middleware\EnsureTokenIsValid;
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






//Application
Route::prefix('/')->group(function () {
    Route::get('/', [ApplicationController::class, 'index'])->name('home');
});



//admin
Route::prefix('/admin')->middleware(ChecKAdmin::class)->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.Home');
    Route::post('/note', [NoteController::class, 'store'])->name('admin.note.store');
    Route::get('/note/status/{Note}', [HomeController::class, 'notestatus'])->name('admin.note.status');
    Route::delete('/note/status/{Note}', [HomeController::class, 'notestatus'])->name('admin.note.status');
    Route::resource('/portfolio_categories', PortfolioCategoryController::class)->names('admin.portfolioCategory');
    Route::resource('/portfolios', PortfolioCategoryController::class)->names('admin.portfolio');
    Route::resource('/services', ServiceController::class)->names('admin.Service');

    //setting
    Route::prefix('/settings')->group(function () {
        //profile_english
        Route::get('/profile_english', [ProfileSettingController::class, 'index'])->name('admin.setting.profile.index');
        Route::get('/profile_english/edit', [ProfileSettingController::class, 'edit'])->name('admin.setting.profile.edit');
        Route::put('/profile_english/update', [ProfileSettingController::class, 'update'])->name('admin.setting.profile.update');

        //setting_persian
        Route::get('/profile_persian', [ProfileSettingPersianController::class, 'index'])->name('admin.setting.profilePersian.index');
        Route::get('/profile_persian/edit', [ProfileSettingPersianController::class, 'edit'])->name('admin.setting.profilePersian.edit');
        Route::put('/profile_persian/update', [ProfileSettingPersianController::class, 'update'])->name('admin.setting.profilePersian.update');


        //call
        Route::get('/call', [CallSettingController::class, 'index'])->name('admin.setting.call.index');
        Route::get('/call/edit', [CallSettingController::class, 'edit'])->name('admin.setting.call.edit');
        Route::put('/call/update', [CallSettingController::class, 'update'])->name('admin.setting.call.update');

    });
    //skill
    Route::resource('/skill', SkillController::class)->names('admin.skill');

    //social media
    Route::resource('/social_media', SocialMediaController::class)->names('admin.socialMedia');

    //Portfolio category
    Route::resource('PortfolioCategory', PortfolioCategoryController::class)->names('admin.portfolio.category');
    Route::resource('Portfolio', PortfolioController::class)->names('admin.portfolio');


    //service
    Route::resource('service', ServiceController::class)->names('admin.service');


});
Auth::routes();


Auth::routes();