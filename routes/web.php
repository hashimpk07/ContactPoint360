<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminFormBuilderController;
use App\Http\Controllers\UserFormsController;

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

/* 
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('auth.login');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/* Dynamic Form Builder In Admin Panel */
Route::view('formbuilder', 'admin.create');
Route::post('save-form-builder', [AdminFormBuilderController::class, 'create']);
Route::get('form-builder', [AdminFormBuilderController::class, 'index']);
Route::delete('form-delete/{id}', [AdminFormBuilderController::class, 'destroy']);

Route::view('edit-form-builder/{id}', 'admin.edit');
Route::get('get-form-builder-edit', [AdminFormBuilderController::class, 'editData']);
Route::post('update-form-builder', [AdminFormBuilderController::class, 'update']);


Route::get('user', [UserFormsController::class, 'index']);
Route::view('read-form-builder/{id}', 'user.read');
Route::get('get-form-builder', [UserFormsController::class, 'read']);
Route::post('save-form-transaction', [UserFormsController::class, 'create']);

