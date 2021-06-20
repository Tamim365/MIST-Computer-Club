<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTable;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\BudgetTable;
use App\Http\Controllers\MyAdminController;
use App\Http\Controllers\AdminTable;
use App\Http\Controllers\Moderator;


use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home/index');
})->name('/');

Route::view('Registration', 'Registration');
Route::get('course-content', [CourseController::class, 'index']);
Route::view('activities', 'activity');

Route::post('/auth/save/member',[AuthController::class, 'save_member'])->name('auth.save.member');
Route::post('/auth/save/moderator',[AuthController::class, 'save_moderator'])->name('auth.save.moderator');
Route::post('/auth/check',[AuthController::class, 'check'])->name('auth.check');
// Route::post('/member/profile/update',[MemberController::class, 'update'])->name('member.profile.update');
Route::post('/member/profile',[MemberController::class, 'update'])->name('member.profile.update');
Route::post('/moderator/profile',[ModeratorController::class, 'update'])->name('moderator.profile.update');
Route::post('/upload/member/{club_id}', [MemberController::class, 'uploadImage']);
Route::post('/upload/moderator/{fact_id}', [ModeratorController::class, 'uploadImage']);

Route::any('/tables',[AdminController::class, 'load'])->name('tables.load');


Route::get('/members', [MemberController::class,'index']);

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/member/profile',[MemberController::class, 'member_profile'])->name('member.profile');
    Route::get('/moderator/profile',[ModeratorController::class, 'moderator_profile'])->name('moderator.profile');
});
Route::post('submit_course',[CourseController::class,'save']);
Route::post('update_course/{id}',[CourseController::class,'update']);
Route::post('delete_course/{id}',[CourseController::class,'delete']);
Route::get('courses',[CourseTable::class,'index']);


Route::get('budgets',[BudgetTable::class,'index']);
Route::post('submit_budget',[BudgetController::class,'save']);
Route::post('update_budget/{id}',[BudgetController::class,'update']);
Route::post('delete_budget/{id}',[BudgetController::class,'delete']);


Route::get('admins',[AdminTable::class,'index']);
Route::post('submit_ad',[MyAdminController::class,'save']);
Route::post('update_admin/{id}',[MyAdminController::class,'update']);
Route::post('delete_admin/{id}',[MyAdminController::class,'delete']);











