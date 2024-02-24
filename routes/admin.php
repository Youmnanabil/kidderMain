<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminRegisterController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('welcome', function(){
    return "welcome";
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify'=>true]);

//admin login/register 
Route::get('dashbourd/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('dashbourd/login', [AdminLoginController::class, 'checklogin'])->name('admin.checklogin');
Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('dashbourd/register', [AdminRegisterController::class, 'register'])->name('admin.login');
Route::post('dashbourd/register', [AdminRegisterController::class, 'checkregister'])->name('admin.checkregister');

Route::middleware('auth:admin')->group(function(){
    Route::get('dashbourd',[AdminHomeController::class, 'index'])->name('admin.dashbourd.home');

});