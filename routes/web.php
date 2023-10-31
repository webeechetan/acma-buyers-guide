<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use OpenSpout\Common\Entity\Row;
use App\Http\Controllers\PaymentsPlanController;
use App\Http\Controllers\PaymentController;

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
    return view('website.index');
});

/************* Admin Routes ****************/

Route::get('/admin/login', [AuthController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class,'authenticate'])->name('admin.authenticate');

Route::middleware(['auth'])->prefix('admin')->group(function () {
   

   
    Route::get('/companies', [CompanyController::class,'index'])->name('admin.companies');
    Route::get('/companies-data', [CompanyController::class,'companiesData'])->name('admin.companies.data');
    Route::get('/logout', [AuthController::class,'logout'])->name('admin.logout');
});

/************* Company Routes ****************/

Route::get('/company/register', [CompanyController::class,'register'])->name('company.register');
Route::post('/company/register', [CompanyController::class,'store'])->name('company.store');

Route::get('/company/login', [CompanyController::class,'login'])->name('company.login');
Route::post('/company/login', [CompanyController::class,'authenticate'])->name('company.authenticate');
Route::get('/company/fill-up-details', [CompanyController::class,'fillUpDetails'])->name('company.fillUpDetails');
Route::post('/company/fill-up-details', [CompanyController::class,'fillUpDetailsStore'])->name('company.fillUpDetailsStore');

Route::get('/company/dashboard', [CompanyController::class,'dashboard'])->name('company.dashboard');




Route::get('/company/logout', [CompanyController::class,'logout'])->name('company.logout');

/************* payments Routes ****************/


Route::get('/company/payments', [PaymentController::class, 'subscription_payment'])->name('company.payments');



