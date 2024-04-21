<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\frontController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\settingsPageController;
use App\Http\Controllers\skillController;
use Doctrine\DBAL\Schema\Index;
use Laravel\Socialite\Facades\Socialite;


Route::get('/',[frontController::class,"index"]);


Route::get('/auth', [authcontroller:: class, "index"])->name('login')->middleware('guest');

Route::get('/auth/redirect', [authcontroller:: class, "redirect"])->middleware('guest');

Route::get('/auth/callback', [authcontroller:: class, "callback"])->middleware('guest');

Route::get('/auth/logout', [authcontroller:: class, "logout"]);


Route::prefix('dashboard')->middleware('auth')->group(

    function(){
        Route:: get('/',[halamanController::class,'index']);
        Route::resource('halaman',halamanController::class);
        Route::get('skill',[skillController::class,"index"])->name('skill.index');
        Route::post('skill',[skillController::class,"update"])->name('skill.update');
        Route::get('profile',[profileController::class,"index"])->name('profile.index');
        Route::post('profile',[profileController::class,"update"])->name('profile.update');
        Route::get('settings',[settingsPageController::class,"index"])->name('settings.index');
        Route::post('settings',[settingsPageController::class,"update"])->name('settings.update');
    }
);
