<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);

Route::get('posts/{post}/comments', [PostController::class, 'comments']);


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
