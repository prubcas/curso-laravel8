<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Routes for the admin panel
|
*/

Route::get(
    '/',
    [
        AdminController::class,
        'index'
    ]
)->name('admin.index');

Route::get(
    '/users',
    [
        AdminController::class,
        'adminUsers'
    ]
);

Route::get(
    '/users/{user}/profile',
    [
        AdminController::class,
        'adminProfile'
    ]
);


