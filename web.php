<?php

use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "hello laravel 11";
});
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);