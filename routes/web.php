<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/', [AuthController::class,'login'])->name('admin.login')->middleware('guest');
Route::get('/admin/login', [AuthController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class,'authenticate'])->name('admin.authenticate');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/logout', [AuthController::class,'logout'])->name('admin.logout');
});


