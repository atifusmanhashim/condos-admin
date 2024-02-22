<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AddNewProjectController ;
use App\Http\Controllers\AgentController ;
use App\Http\Controllers\AddNewAgentController ;
use App\Http\Controllers\UserProfileController ;
use App\Http\Controllers\ProjectDataTableController ;
use App\Http\Controllers\ComposeEmailController ;
use App\Http\Controllers\FaqController ;
use App\Http\Controllers\AddNewQuestionController ;
use App\Http\Controllers\UploadDataFileController ;
use App\Http\Controllers\BuilderController;
use App\Http\Controllers\NewsController ;
use App\Http\Controllers\AddNewsController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// PHP Info
Route::get('/phpinfo', function () {
    phpinfo();
});


//Loading Dashboard or Login Page - Object: A002
Route::get('/',[HomeController::class,'index'])->name('root');


//Loading Dashboard - Object: A001
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

//Loading Dashboard or Login Page - Object: A002
Route::get('/',[HomeController::class,'index'])->name('root');

//Login Page - Object: A003
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('postlogin',[LoginController::class,'postLogin'])->name('postlogin');

//Logout - Object: A005
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//User Registration, OTP, Edit User - Object: A005
Route::get('/register',[RegisterController::class,'index'])->name('user-register');

//Loading Project 
Route::get('/projects',[ProjectsController::class,'index'])->name('projects');

//Loading Add New Project 
Route::get('/add-new-project',[AddNewProjectController ::class,'index'])->name('add-new-project');

//Loading Agent 
Route::get('/agents',[AgentController ::class,'index'])->name('agents');

//Loading Add new Agent 
Route::get('/add-new-agent',[AddNewAgentController ::class,'index'])->name('add-new-agent');

Route::get('/user-profile',[UserProfileController ::class,'index'])->name('user-profile');

Route::get('/project-data-table',[ProjectDataTableController ::class,'index'])->name('project-data-table');

Route::get('/compose-email',[ComposeEmailController ::class,'index'])->name('compose-email');

//FAQ
Route::get('/faq',[FaqController ::class,'index'])->name('faq');

Route::get('/add-new-question',[FAQController::class,'add_faq'])->name('add-new-question');

Route::get('/upload-data-file',[UploadDataFileController ::class,'index'])->name('upload-data-file');

//Builders
Route::get('/builders',[BuilderController::class,'index'])->name('builders');

Route::get('/add-new-builder',[BuilderController::class,'addbuilder'])->name('add-new-builder');

//News
Route::get('/news',[NewsController ::class,'index'])->name('news');

Route::get('/add-news',[NewsController::class,'add_news'])->name('add-news');

// Route::get('/', function () {
//     return view('welcome');
// });