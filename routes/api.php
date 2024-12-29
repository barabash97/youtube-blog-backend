<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);

Route::get('posts/{post}/comments', [PostController::class, 'comments']);



