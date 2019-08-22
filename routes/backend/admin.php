<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Sub_categoryController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('category/sub', [Sub_categoryController::class, 'index'])->name('sub_category.index');
Route::get('category/sub/create', [Sub_categoryController::class, 'create'])->name('sub_category.create');
Route::post('category/sub/store', [Sub_categoryController::class, 'store'])->name('sub_category.store');
Route::get('category/sub/edit/{id}', [Sub_categoryController::class, 'edit'])->name('sub_category.edit');
Route::post('category/sub/update', [Sub_categoryController::class, 'update'])->name('sub_category.update');
Route::get('category/sub/delete/{id}', [Sub_categoryController::class, 'delete'])->name('sub_category.delete');
Route::get('category/sub/show/{id}', [Sub_categoryController::class, 'show'])->name('sub_category.show');
