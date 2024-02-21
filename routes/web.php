<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback(MainController::class);

Route::get('index', [MainController::class, 'index'])->name('index');

Route::get('about', [MainController::class, 'about'])->name('about');

Route::get('classes', [MainController::class, 'classes'])->name('classes');

Route::get('contact', [MainController::class, 'contact'])->name('contact');

Route::get('facilites', [MainController::class, 'facilites'])->name('facilites');

Route::get('teacher',[MainController::class, 'teacher'])->name('teacher');

Route::get('becomeTeacher',[MainController::class, 'becomeTeacher'])->name('becomeTeacher');

Route::get('appointments', [MainController::class , 'appointments'])->name('appointments');

Route::get('testimonials',[MainController::class, 'testimonials'])->name('testimonials');

Route::get('admin', function(){
    return view('admin.index');
});