<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});


Route::controller(AuthController::class)->prefix('login')->group(function(){
    route::get('/','getLogin');
    route::post('/','login')->middleware("throttle-login:2,3");
});



Route::controller(AuthController::class)->prefix('sign-up')->group(function(){
    route::get('/','getSignUp');
    route::post('/','signUp');
});

Route::middleware(['auth'])->group(function(){
    Route::controller(AuthController::class)->group(function(){
        route::get('account','getAccount');
        route::get('logout','logout');
    });
});
