<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// ACL
Route::prefix('/admin')->group(function () {
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/reset-password', [AdminController::class, 'resetPassword']);
});
