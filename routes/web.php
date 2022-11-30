<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\TaskController;
use App\Http\Controllers\Mails\AuthMailController;
use Illuminate\Support\Facades\Route;

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


/**
 * Home Route
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

/**
 * Web Routes
 */
Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/create', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/{id}/update', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/{id}/delete', [TaskController::class, 'destroy'])->name('task.delete');

/**
 * Mails Routes
 */
Route::get('mail-send', [AuthMailController::class, 'sendRegisterMail'])->name('mail.register');

/**
 * Auth Routes
 */
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAction'])->name('register.action');
