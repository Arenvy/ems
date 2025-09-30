<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});


Route::get('/login', [UserController::class, 'loginpage'])->name('user.loginpage');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'registerpage'])->name('user.registerpage');
Route::post('/register', [UserController::class, 'register']);

Route::post('/index', [UserController::class, 'logout'])->name('user.logout');
Route::get('/index', [UserController::class, 'indexpage']);