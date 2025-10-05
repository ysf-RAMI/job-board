<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/about', [IndexController::class, 'about']);


Route::get('/job', [JobController::class, 'index']);
