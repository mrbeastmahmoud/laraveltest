<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/post/{post:slug}',[PostsController::class ,'showPosts'] );


Route::get('/', [PostsController::class, 'index'])->name('Home');


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/logout',[SessionController::class, 'destroy'])->middleware('auth');
Route::get('/login',[SessionController::class, 'create'])->middleware('guest');
Route::post('/login',[SessionController::class, 'login'])->middleware('guest');



