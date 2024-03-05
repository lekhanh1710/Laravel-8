<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::view('/', 'admin.welcome');
Route::view('/home', 'admin.dashboard')->name('home');
Route::view('/register', 'admin.auth.register')->name('register');
Route::view('/profile/edit', 'admin.profile.edit')->name('profile.edit');
Route::view('/profile/update', 'admin.profile.edit')->name('profile.update');
Route::view('/profile/password', 'admin.profile.edit')->name('profile.password');
Route::view('/users', 'admin.users.index')->name('user.index');
Route::view('/pages/icons', 'admin.pages')->name('pages.icons');
Route::view('/pages/maps', 'admin.pages.maps')->name('pages.maps');
Route::view('/pages/notifications', 'admin.pages.notifications')->name('pages.notifications');
Route::view('/pages/tables', 'admin.pages')->name('pages.tables');
Route::view('/pages/typography', 'admin.pages')->name('pages.typography');
Route::view('/pages/rtl', 'admin.pages')->name('pages.rtl');
Route::view('/pages/upgrade', 'admin.pages')->name('pages.upgrade');
Route::view('/alerts/success', 'admin.alerts.success')->name('alerts.success');
Route::post('/register',[Controllers\Admin\UserController::class,'create']);
//Route::post('/profile/update',[Controllers\Admin\UserController::class,'update']);

Route::match(['get', 'post'], '/login', [Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');
Route::post( '/logout', [Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
});
