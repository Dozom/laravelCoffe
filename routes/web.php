<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::view('/login', "login")->name("login");
Route::view('/register', "register")->name("register");
Route::view('/secret', "secret")->name("secret");
Route::post('/validate-register', [LoginController::class, 'register'])->name('validate-register');
Route::post('/log-in', [LoginController::class, 'login'])->name('log-in');
Route::get('/logout', [LoginController::class, 'login'])->name('logout');

Route::get('test', [TestController::class, 'test'])->name('test');
