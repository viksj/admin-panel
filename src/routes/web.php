<?php


use Illuminate\Support\Facades\Route;
use Himanshu\Adminpanel\Http\Controllers\Dashboard\DashboardController;

// Route::group(['namespace'=>'Himanshu\Adminpanel\Http\Controllers\Dashboard'], function () {
//     Route::get('adminpanel','DashboardController@index');
// });

Route::get('adminpanel',[DashboardController::class,'index']);
Route::get('login',[DashboardController::class,'index'])->name('login');