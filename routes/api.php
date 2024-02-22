<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// User Sections
use App\Http\Controllers\AppUserController;

// Admin Users
use App\Http\Controllers\RegisterController;

// Login 
use App\Http\Controllers\LoginController;

//News
use App\Http\Controllers\NewsController;

//Projects
use App\Http\Controllers\ProjectsController;

//FAQs
use App\Http\Controllers\FAQController;

//Builders
use App\Http\Controllers\BuilderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// App Users Listing 
//Active Admin Users Listing
Route::get('app-users-list', [AppUserController::class, 'app_users_lst'])->name('app-users-list');

// Registering new Admin User
Route::post('register', [RegisterController::class, 'register'])->name('register');

// Login Existing Admin User
Route::post('login-api', [LoginController::class, 'login'])->name('login-api');

//Active Admin Users Listing
Route::get('admin-users-list', [RegisterController::class, 'admin_users_lst'])->name('admin-users-list');

//Delete Selected Admin User
Route::post('delete-user', [RegisterController::class, 'delete_user'])->name('delete-user')->middleware('auth:api');

//Update Admin User Details
Route::post('update_user_details',[RegisterController::class,'update_user_details'])->name('update_user_details')->middleware('auth:api');

// Add / Update / News Listing
Route::get('news_lst',[NewsController::class,'news_lst'])->name('news_lst')->middleware('auth:api');

// Projects / Property
Route::get('projects_lst',[ProjectsController::class,'projects_lst'])->name('projects_lst')->middleware('auth:api');

//Builders 
Route::get('builders_lst',[BuilderController::class,'builders_lst'])->name('builders_lst');

//Builder Object Creation
Route::post('create-builder',[BuilderController::class,'create_builder'])->name('create-builder')->middleware('auth:api');

//Delete Builder Object
Route::post('delete-builder',[BuilderController::class,'delete_builder'])->name('delete-builder')->middleware('auth:api');

//Update Builder Object
Route::post('update-builder',[BuilderController::class,'update_builder'])->name('update-builder')->middleware('auth:api');

//FAQs
Route::get('/get_faqs',[FAQController::class,'get_faqs'])->name('get_faqs');
Route::get('/get_faq_by_id/{id}',[FAQController::class,'get_faq_by_id'])->name('get_faq_by_id');
Route::post('faq_insert',[FAQController::class,'faq_insert'])->name('faq_insert')->middleware('auth:api');
Route::post('delete_faq',[FAQController::class,'delete_faq'])->name('delete_faq')->middleware('auth:api');
Route::post('update_faq',[FAQController::class,'update_faq'])->name('update_faq')->middleware('auth:api');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
