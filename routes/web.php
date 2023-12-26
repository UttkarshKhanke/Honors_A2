<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

	@@ -34,3 +35,7 @@
Route::get('/admin', [
    AdminController::class, 'index'
])->middleware('auth')->name('admin');

Route::get('/admin/users', [
    AdminUsersController::class, 'index'
])->middleware('auth')->name('admin-users');
