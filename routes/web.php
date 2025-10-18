<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// index controllers
Route::get('/', [IndexController::class, 'index']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/about', [IndexController::class, 'about']);

// jobs controllers
Route::get('/job', [JobController::class, 'index']);

// Post controllers
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/{id}', [PostController::class, 'show']);
Route::get('/blog/delete/{id}', [PostController::class, 'delete']);

// comment controller
Route::get('/comment/create', [CommentController::class, 'create']);
Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comment/delete/{id}', [CommentController::class, 'delete']);