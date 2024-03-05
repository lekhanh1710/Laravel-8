<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('admin.welcome');
});
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
//Route::prefix('admin')->group(function () {
//    Route::view('/', 'admin.welcome');
//    Route::view('/home', 'admin.dashboard')->name('home');
//    Route::view('/register', 'admin.auth.register')->name('register');
//    Route::view('/login', 'admin.auth.login')->name('login');
//    Route::post('/register',[Controllers\Admin\UserController::class,'create']);
//});
//
//Route::post('/register',[Controllers\Admin\UserController::class,'create']);
