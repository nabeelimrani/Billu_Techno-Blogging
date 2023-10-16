<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthorController;


Route::prefix('author')->name('author.')->group(function(){

    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login','back.pages.auth.login')->name('login');
        Route::view('/signin','back.pages.auth.signin')->name('signin');
        Route::view('/forgot-password','back.pages.auth.forgot')->name('forgot-password');
        Route::get('/password/reset/{token}',[AuthorController::class,'ResetForm'])->name('reset-form');
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('/home',[AuthorController::class,'index'])->name('home');
        Route::post('/logout',[AuthorController::class,'logout'])->name('logout');
        Route::get('/profile',[AuthorController::class,'profile'])->name('profile');
        Route::post('/change-profile-picture', [AuthorController::class, 'changeProfilePicture'])->name('change-profile-picture');
    });
});
