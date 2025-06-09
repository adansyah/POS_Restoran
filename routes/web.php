<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DapurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admins', AdminController::class);
Route::get('kitchen', [DapurController::class, 'index']);
