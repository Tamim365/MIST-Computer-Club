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
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoachTable;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ContestTable;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\Moderator;
use App\Http\Controllers\RNDController;
use App\Http\Controllers\RNDTable;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamsTable;
use App\Http\Controllers\Volunteertable;
use App\Http\Controllers\VounteerController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home/index');
})->name('/');

Route::view('Registration', 'Registration');
Route::get('course-content', [CourseController::class, 'index']);
Route::view('activities', 'activity');
Route::view('community', 'community');
Route::view('events', 'fest');

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
//For Course
Route::post('submit_course',[CourseController::class,'save']);
Route::post('update_course/{id}',[CourseController::class,'update']);
Route::post('delete_course/{id}',[CourseController::class,'delete']);
Route::get('courses',[CourseTable::class,'index'])->name('courses.table');
//Route::get('courses',[CourseTable::class,'index']);
Route::post('/course/enroll', [CourseController::class, 'enroll_as_participant'])->name('course.enroll.participant');

//For Budgets
Route::get('budgets',[BudgetTable::class,'index'])->name('budget.table');
Route::post('submit_budget',[BudgetController::class,'save']);
Route::post('update_budget/{id}',[BudgetController::class,'update']);
Route::post('delete_budget/{id}',[BudgetController::class,'delete']);
Route::post('accept_budget/{id}',[BudgetController::class,'accept']);
Route::post('decline_budget/{id}',[BudgetController::class,'decline']);

//For Admins
Route::get('admins',[AdminTable::class,'index']);
Route::post('submit_ad',[MyAdminController::class,'save']);
Route::post('update_admin/{id}',[MyAdminController::class,'update']);
Route::post('delete_admin/{id}',[MyAdminController::class,'delete']);

//For Teams

Route::get('teams',[TeamsTable::class,'index'])->name('team.table');
Route::post('submit_team',[TeamsController::class,'save']);
Route::post('update_team/{id}',[TeamsController::class,'update']);
Route::post('delete_team/{id}',[TeamsController::class,'delete']);

//For Coach

Route::get('coaches',[CoachTable::class,'index'])->name('coach.table');
Route::post('submit_coach',[CoachController::class,'save']);
Route::post('update_coach/{id}',[CoachController::class,'update']);
Route::post('delete_coach/{id}',[CoachController::class,'delete']);

//For contest
Route::get('contest',[ContestTable::class,'index'])->name('contest.table');
Route::post('submit_contest',[ContestController::class,'save']);

//For RND
Route::get('rnd',[RNDTable::class,'index'])->name('rnd.table');
Route::post('submit_rnd',[RNDController::class,'save']);
Route::post('update_rnd/{id}',[RNDController::class,'update']);
Route::post('delete_rnd/{id}',[RNDController::class,'delete']);

//For Dashboard
Route::view('dash', 'dashboard_index')->name('dashboard.index');
Route::view('user_dash', 'users_dash')->name('user.index');
Route::view('blog', 'blog')->name('blog.index');
Route::view('dashboard', 'dashboard/index');
Route::view('dashboard/user','dashboard/user');

//For Volunteer

Route::get('volunteer',[Volunteertable::class,'index'])->name('vol.table');
Route::post('submit_volunteer',[VounteerController::class,'save']);

//For Add Events

Route::view('blogadd', 'blog_add')->name('blog_add.index');

//For Enroll

Route::get('enroll',[EnrollController::class,'index'])->name('enroll.index');





