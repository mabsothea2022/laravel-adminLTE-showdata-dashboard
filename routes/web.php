<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');
});
