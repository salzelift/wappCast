<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'apiIndex']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'apiShow']);

Route::get('/blogs', [BlogController::class, 'apiIndex']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'apiShow']);
