<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', function () {
    dd(session('user_type'));
});


Route::get('/sl-admin', [AdminController:: class , 'index'])->name('admin-dashboard');

Route::get('/sl-admin-login', [AdminController::class , 'login'])->name('login');

Route::any('/sl-admin-loggedin', [AdminController::class , 'authenticate'])->name('loggedin');

Route::get('/sl-admin-register', [AdminController::class , 'register'])->name('signup');

Route::any('/sl-admin-registration', [AdminController::class , 'store'])->name('new-signup');

Route::get('/sl-admin-forgot-password', [AdminController::class , 'forgot_password'])->name('forgot-password');

Route::get('/sl-admin-change-password', [AdminController::class , 'change_password'])->name('change-password');

Route::get('/sl-admin-logout', [AdminController:: class, 'logout'])->name('admin-logout');

Route::get('/404-page', function(){
    return view('404');
})->name('404-page');

Route::get('/sl-admin/add-category', [CategoriesController:: class, 'index'])->name('add-category');

Route::any('/sl-admin/add-category-db', [CategoriesController:: class, 'store'])->name('add-category-db');

Route::get('/sl-admin/all-category', [CategoriesController:: class, 'show'])->name('all-category');



