<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\AdminPaymentController;

use App\Models\Admin\Member;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use OpenSpout\Common\Entity\Row;
use App\Http\Controllers\PaymentsPlanController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\CCAvenueController;
use App\Ccavenue\Crypto;



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

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');

Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');


Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');


Route::middleware(['auth'])->prefix('admin')->group(function () {


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/members', [MemberController::class, 'index'])->name('admin.members');
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('admin.subscription');
    Route::get('/payments', [AdminPaymentController::class, 'index'])->name('admin.payments');
    Route::get('/companies', [CompanyController::class, 'index'])->name('admin.companies');
    Route::get('/companies-data', [CompanyController::class, 'companiesData'])->name('admin.companies.data');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});


/************* Company Routes ****************/

Route::get('/company/register', [CompanyController::class, 'register'])->name('company.register');
Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');

Route::get('/company/login', [CompanyController::class, 'login'])->name('company.login');
Route::post('/company/login', [CompanyController::class, 'authenticate'])->name('company.authenticate');
Route::get('/company/fill-up-details', [CompanyController::class, 'fillUpDetails'])->name('company.fillUpDetails');
Route::post('/company/fill-up-details', [CompanyController::class, 'fillUpDetailsStore'])->name('company.fillUpDetailsStore');

Route::get('/company/dashboard/{filter?}', [CompanyController::class, 'dashboard'])->name('company.dashboard');
Route::get('/company/logout', [CompanyController::class, 'logout'])->name('company.logout');

/************* payments Routes ****************/


Route::get('/company/payments', [PaymentController::class, 'subscription_payment'])->name('company.payments');


//Route::post('/company/paymentRequest', [CCAvenueController::class, 'index'])->name('payment.request');

Route::post('/company/subscription-payment', [PaymentController::class, 'makePayment'])->name('payment.makepayment');

Route::post('/payment-success', function (Request $request) {

    // dd($request->all());

    $crypto = new Crypto();

    error_reporting(0);

    $workingKey = '6F36707D0668636B26E60F3992104416';        //Working Key should be provided here.
    $encResponse = $request->encResp;           //This is the response sent by the CCAvenue Server
    $rcvdString = $crypto->decrypt($encResponse, $workingKey);        //Crypto Decryption used as per the specified working key.
    $order_status = "";
    $decryptValues = explode('&', $rcvdString);
    $dataSize = sizeof($decryptValues);
    echo "<center>";

    for ($i = 0; $i < $dataSize; $i++) {
        $information = explode('=', $decryptValues[$i]);
        if ($i == 3)    $order_status = $information[1];
    }

    if ($order_status === "Success") {
        echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
    } else if ($order_status === "Aborted") {
        echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
    } else if ($order_status === "Failure") {
        echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
    } else {
        echo "<br>Security Error. Illegal access detected";
    }

    echo "<br><br>";

    echo "<table cellspacing=4 cellpadding=4>";
    for ($i = 0; $i < $dataSize; $i++) {
        $information = explode('=', $decryptValues[$i]);
        echo '<tr><td>' . $information[0] . '</td><td>' . urldecode($information[1]) . '</td></tr>';
    }

    echo "</table><br>";
    echo "</center>";
})->name('payment.success');
