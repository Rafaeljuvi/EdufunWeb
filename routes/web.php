<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ContentController;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'home']);

Route::get('/writers', function(){
    return view('writers');
});

Route::get('/about', [homeController::class, 'about']);
Route::get('/posts', [ContentController::class, 'index'])->name('posts.index');
