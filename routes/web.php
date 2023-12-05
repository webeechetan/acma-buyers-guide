<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Middleware\CompanyAuthMiddleware;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Models\Admin\Member;
use App\Models\User;
use App\Models\CompanyUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use OpenSpout\Common\Entity\Row;
use App\Http\Controllers\PaymentsPlanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CCAvenueController;
use App\Http\Controllers\Admin\ProfileApprovalController;
use App\Ccavenue\Crypto;
use App\Imports\CompanyImport;
use Maatwebsite\Excel\Facades\Excel;





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

// Route::get('/update-request', function () {
//     $company_update_request = CompanyUpdateRequest::find(31);
//     $res = $company_update_request->approve();
//     dd($res);
// });



// import excel file 

Route::get('/import', function () {
    return view('website.test');
});

Route::post('/import', function (Request $request) {
    // return $request->abg;
    Excel::import(new CompanyImport, $request->abg) ;
    // return redirect('/')->with('success', 'All good!');
})->name('import.post');

Route::get('/', function () {
    return view('website.index');
});

/************* Admin Routes ****************/

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');



Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/members', [MemberController::class, 'index'])->name('admin.members');
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('admin.subscription');
    Route::get('/payments', [AdminPaymentController::class, 'index'])->name('admin.payments');
    Route::get('/companies', [CompanyController::class, 'index'])->name('admin.companies');
    Route::get('/companies/{id}', [CompanyController::class, 'destroy'])->name('admin.companies.destroy');
    Route::get('/companies-data', [CompanyController::class, 'companiesData'])->name('admin.companies.data');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [ProfileApprovalController::class, 'index'])->name('admin.profile.approval');
    Route::get('/profile/approve/{id}', [ProfileApprovalController::class, 'update'])->name('admin.profile.approve');
    Route::get('/edit-details', function () {  
        return view('admin.edit-emailer');
    });
});


/************* Company Routes ****************/


Route::middleware(['company.auth'])->prefix('company')->group(function () {


        Route::get('/dashboard/{filter?}', [CompanyController::class, 'dashboard'])->name('company.dashboard');
  
        Route::post('/register', [CompanyController::class, 'store'])->name('company.store');
      
        Route::get('/fill-up-details', [CompanyController::class, 'fillUpDetails'])->name('company.fillUpDetails');
        Route::post('/fill-up-details', [CompanyController::class, 'fillUpDetailsStore'])->name('company.fillUpDetailsStore');
        Route::get('/logout', [CompanyController::class, 'logout'])->name('company.logout');

        /************* payments Routes ****************/
        Route::get('/payments', [PaymentController::class, 'subscription_payment'])->name('company.payments');
        Route::post('/subscription-payment', [PaymentController::class, 'makePayment'])->name('payment.makepayment');

      
        ////////////Emailer template for company detals update for company and admin

        Route::get('/edit-details', function () {

            return view('website.edit-emailer');

        });

        Route::get('/profile', function () {
            return view('website.profile');
        });

});


Route::get('company/register', [CompanyController::class, 'register'])->name('company.register');
Route::get('company/login', [CompanyController::class, 'login'])->name('company.login');

Route::post('company/login', [CompanyController::class, 'authenticate'])->name('company.authenticate');
  ////////***********Forgot password****************//////////////

  Route::get('/forgot-password', [CompanyController::class, 'forgotpassword_view'])->name('company.forgotpassword.view');
  Route::post('/forgot-password', [CompanyController::class, 'forget_password'])->name('company.forgotpassword');
  Route::get('/otp-verify-form', [CompanyController::class, 'otp_verify_form'])->name('company.forgotpassword.otpverify');
  Route::post('/otp-authentication', [CompanyController::class, 'otp_authentication'])->name('company.Otpauthentication');
  Route::get('/reset-password-form', [CompanyController::class, 'reset_password_form'])->name('company.ResetPassword.form');
  Route::post('/reset-password/update', [CompanyController::class, 'reset_password_update'])->name('company.ResetPassword.update');




//Route::post('/payment-success', [PaymentController::class, 'payment_success'])->name('payment.success');
