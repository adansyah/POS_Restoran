<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DapurController;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {

    return view('welcome');
});


Route::resource('admins', AdminController::class);
Route::resource('kategori', CategoryController::class);
Route::middleware(['auth', 'cekrole:admin'])->group(function () {});

Route::middleware(['auth', 'cekrole:dapur'])->group(function () {
    Route::get('kitchen', [DapurController::class, 'index']);
});
