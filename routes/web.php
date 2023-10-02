<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;

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
    return 'Home Page';
});

/************* Admin Routes ****************/

Route::get('/admin/login', [AuthController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class,'authenticate'])->name('admin.authenticate');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/companies', [CompanyController::class,'index'])->name('admin.companies');
    Route::get('/companies-data', [CompanyController::class,'companiesData'])->name('admin.companies.data');
    

    Route::get('/logout', [AuthController::class,'logout'])->name('admin.logout');
});

/************* Company Routes ****************/

Route::get('/company/register', [CompanyController::class,'register'])->name('company.register');
Route::post('/company/register', [CompanyController::class,'store'])->name('company.store');

Route::get('/company/login', [CompanyController::class,'login'])->name('company.login');
Route::post('/company/login', [CompanyController::class,'authenticate'])->name('company.authenticate');





