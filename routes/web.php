<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Adminauth; 
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\user\HomeController;






// ============================User Route==================================


Route::get('/',[HomeController::class,'index']);
Route::get('login/',[HomeController::class,'mobile_login']);
Route::post('generate-otp',[HomeController::class,'generate_otp']);
Route::get('login-otp/{user_id}',[HomeController::class,'login_otp'])->name('login-otp');
Route::post('check-otp',[HomeController::class,'check_otp']);

Route::middleware([Userauth::class])->group(function()
{
    Route::get('user-dashboard',[HomeController::class,'user_dashboard']);
    Route::get('user-logout',[HomeController::class,'user_logout']);
    Route::get('profile-setting',[HomeController::class,'profile_setting']);
    Route::post('update-profile',[HomeController::class,'update_profile']);
    Route::get('post-ads',[HomeController::class,'post_ads']);
});


// ============================Admin Route==================================


Route::get('admin/',[AuthController::class,'index']);
Route::post('admin-login-post',[AuthController::class,'login_post']);
Route::get('/forgot-password',[AuthController::class,'forgorIndex']);
Route::post('save-forgot-password',[AuthController::class,'forgorPassword']);
Route::get('/reset-password/{id}',[AuthController::class,'resetPassword']);
Route::post('/save-reset-password',[AuthController::class,'resetPasswordSave']);

Route::middleware([Adminauth::class])->prefix('admin')->group(function()
{

    Route::get('logout',[AuthController::class,'logout']);
    Route::get('dashboard', [DashboardController::class, 'index']);
    // change password
    Route::get('change-password',[ChangePasswordController::class,'index']);
    Route::post('save-change-password',[ChangePasswordController::class,'changePassword']);

    //mail check
    Route::get('mail-check',[DashboardController::class,'sendMail']);

   //role module
    Route::group(['prefix'=>'role'],function()
    {
        Route::get('/list',[RoleController::class,'index']);
        Route::get('/get-data-ajax',[RoleController::class,'getDataAjax']);
        Route::get('/add',[RoleController::class,'add']);
        Route::post('/store',[RoleController::class,'store']);
        Route::get('/list/status',[RoleController::class,'status']);
        Route::get('/edit/{id}',[RoleController::class,'edit']);
        Route::get('/delete/{id}',[RoleController::class,'delete']);
        Route::get('/{id}',[RoleController::class,'delete']);
        Route::post('/update',[RoleController::class,'update']);
        Route::get('/permission/{id}',[RoleController::class,'role_permission']);
        Route::post('/permission-update',[RoleController::class,'update_role_permission']);
    });

    //user module
    Route::group(['prefix'=>'user'],function()
    {
        Route::get('/list',[UserController::class,'index']);
        Route::get('/get-data-ajax',[UserController::class,'getDataAjax']);
        Route::get('/add',[UserController::class,'add']);
        Route::post('/store',[UserController::class,'store']);
        Route::get('/list/status',[UserController::class,'status']);
        Route::get('/edit/{id}',[UserController::class,'edit']);
        Route::get('/delete/{id}',[UserController::class,'delete']);
        Route::get('/{id}',[UserController::class,'delete']);
        Route::post('/update',[UserController::class,'update']);
    });

    //user module
    Route::group(['prefix'=>'category'],function()
    {
        Route::get('/list',[CategoryController::class,'index']);
        Route::get('/get-data-ajax',[CategoryController::class,'getDataAjax']);
        Route::get('/add',[CategoryController::class,'add']);
        Route::post('/store',[CategoryController::class,'store']);
        Route::get('/list/status',[CategoryController::class,'status']);
        Route::get('/edit/{id}',[CategoryController::class,'edit']);
        Route::get('/delete/{id}',[CategoryController::class,'delete']);
        Route::get('/{id}',[CategoryController::class,'delete']);
        Route::post('/update',[CategoryController::class,'update']);
    });

   

    //setting module
    Route::group(['prefix'=>'setting'],function()
    {
        Route::group(['prefix'=>'version'],function()
        {
            Route::get('/',[SettingController::class,'addVersion']);
            Route::post('/update',[SettingController::class,'updateVersion']);
        });
    });

    
});

