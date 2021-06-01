<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('Registration', 'Registration');

Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/member/profile',[AuthController::class, 'member_profile']);

Route::post('/auth/save',[AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AuthController::class, 'check'])->name('auth.check');
Route::get('/members', [MemberController::class,'index']);
