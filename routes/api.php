<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

// ACL
Route::prefix('/admin')->group(function () {
    Route::post('/login', [AdminController::class, 'login']);
});

// SuperAdmin
Route::post('/super-admin/login', [SuperAdminController::class, 'login']);

