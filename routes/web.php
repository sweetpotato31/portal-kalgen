<?php
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Models\Apps;
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

Route::get('/',[AppsController::class,'all']);

Route::get('/admin/user',[AdminController::class,'user'])->name('user');
Route::post('/admin/user',[AdminController::class,'create'])->name('create_user');
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/admin/user/{nik}/edit',[AdminController::class,'edit'])->name('edit-user');
Route::put('/admin/user/{nik}',[AdminController::class,'update'])->name('edit-user');
Route::delete('/admin/user/{nik}', [AdminController::class, 'destroy'])->name('del-user');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);