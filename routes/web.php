<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;

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


// comment controller 
Route::get('/comment/create', [CommentController::class, 'create']);
