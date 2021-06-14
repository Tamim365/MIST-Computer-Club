<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home/index');
});

Route::view('Registration', 'Registration');

Route::post('/auth/save',[AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AuthController::class, 'check'])->name('auth.check');
Route::any('/tables',[AdminController::class, 'load'])->name('tables.load');


Route::get('/members', [MemberController::class,'index']);

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/member/profile',[AuthController::class, 'member_profile']);
});

