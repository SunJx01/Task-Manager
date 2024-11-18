<?php

use App\Http\Controllers\addTask;
use App\Http\Controllers\authlogout;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\loginauth;
use App\Http\Controllers\signupauth;
use App\Http\Controllers\taskManager;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

Route::get('/',[dashboard::class, 'dashboard'])->name('dashboard');
Route::post('/new-task', [addTask::class, 'newTask'])->name('newTask');
Route::post('/status', [taskManager::class, 'status'])->name('status');
Route::post('/category', [taskManager::class, 'categoryUpdate'])->name('categoryUpdate');
Route::post('/login', [loginauth::class, 'login'])->name('login');
Route::post('/signup', [signupauth::class, 'signup'])->name('signup');
Route::get('/logout',[authlogout::class,'logout'])->name('logout');