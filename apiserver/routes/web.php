<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

Route::get("/", function () {
    return redirect()->route('admin.dashboard');
});

// Public Guest Routes (Accessible only when NOT logged in)
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/admin/login', [AuthController::class, 'login']);
});

// Protected Admin Routes (Accessible only when logged in)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::view('/content', 'admin.content.index')->name('admin.content');
    Route::get('/content/categories', [CategoryController::class, 'index'])->name('admin.content.categories');

    Route::view('/content/categories/create', 'admin.content.category-form')->name('admin.content.category-create');
    Route::post('/content/categories/store', [CategoryController::class, 'store'])->name('admin.content.category-store');

    Route::get('/content/categories/edit/{category:slug}', [CategoryController::class, 'edit'])->name('admin.content.category-edit');
    Route::post('/content/categories/update/{category:slug}', [CategoryController::class, 'update'])->name('admin.content.category-update');

    Route::post('/content/categories/delete/{category:slug}', [CategoryController::class, 'destroy'])->name('admin.content.category-delete');

    Route::get('/content/categories/{category:slug}', [CategoryController::class, 'show'])->name('admin.content.category-show');
    Route::view('/content/blogs', 'admin.content.blogs')->name('admin.content.blogs');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
