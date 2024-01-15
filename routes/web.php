<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\ProfileApprovalController;
use App\Imports\CompanyImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ExportController;
use App\Models\Company;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Exports\CompanyExportWord;

use App\Exports\CompanyContactDetailExport;
use App\Exports\AdminCompanyExport;


Route::get('/download-excel', function () {
    // return Excel::download(new CompanyContactDetailExport, 'data.xlsx');
    return Excel::download(new AdminCompanyExport, 'company_data.xlsx');
})->name('download.excel');

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

Route::get('/export-word',function(){
   
    $company_export = new CompanyExportWord(98);

    $company_export->export();
});

// Route::get('/update-request', function () {
//     $company_update_request = CompanyUpdateRequest::find(31);
//     $res = $company_update_request->approve();
//     dd($res);
// });

Route::get('/test', function () {

});


Route::get('/import', function () {
    return view('website.importcompany');
})->name('import'); // Yo

// Route::post('/import', function (Request $request) {
//         Excel::import(new CompanyImport, $request->abg) ;
//     // return redirect('/')->with('success', 'All good!');
//     return redirect()->route('admin.companies')->with('success', 'Import completed successfully!');;
// })->name('import.post');


Route::post('/import', function (Request $request) {
    try {
        Excel::import(new CompanyImport, $request->abg);
        return redirect()->route('admin.companies');
        toast('Success','responsemessage','success');

    } catch (\Exception $e) {
        return redirect()->route('admin.companies')->with('error', 'Error during import: ' . $e->getMessage());
    }
})->name('import.post');





Route::get('/', function () {
    return view('website.index');
});

/************* Admin Routes ****************/

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');



Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Route::get('/dashboard', function () {
    //     dd('hello1');
    //     return view('admin.dashboard');
    // })->name('admin.dashboard');

    Route::get('/members', [MemberController::class, 'index'])->name('admin.members');
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('admin.subscription');
    Route::get('/payments', [AdminPaymentController::class, 'index'])->name('admin.payments');
    Route::get('/companies', [CompanyController::class, 'index'])->name('admin.companies');
    Route::get('/companies/{id}', [CompanyController::class, 'destroy'])->name('admin.companies.destroy');
    Route::get('/companies-data', [CompanyController::class, 'companiesData'])->name('admin.companies.data');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [ProfileApprovalController::class, 'index'])->name('admin.profile.approval');
    Route::get('/profile/approve/{id}', [ProfileApprovalController::class, 'update'])->name('admin.profile.approve');
    Route::delete('/profile/disapprove/{id}', [ProfileApprovalController::class, 'destroy'])->name('admin.profile.disapprove');
    Route::get('/edit-details', function () {  
        return view('admin.edit-emailer');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

   
});


/************* Company Routes ****************/


Route::middleware(['company.auth'])->prefix('company')->group(function () {


        Route::get('/dashboard/{filter?}', [CompanyController::class, 'dashboard'])->name('company.dashboard');     
        Route::get('/fill-up-details', [CompanyController::class, 'fillUpDetails'])->name('company.fillUpDetails');
        Route::post('/fill-up-details', [CompanyController::class, 'fillUpDetailsStore'])->name('company.fillUpDetailsStore');
        Route::get('/logout', [CompanyController::class, 'logout'])->name('company.logout');

        /************* payments Routes ****************/
        Route::get('/payments', [PaymentController::class, 'subscription_payment'])->name('company.payments');
        Route::post('/subscription-payment', [PaymentController::class, 'makePayment'])->name('payment.makepayment');
        Route::get('/view-company/{id}', [CompanyController::class, 'view_company'])->name('company.view_company');
        
        ////////////Emailer template for company detals update for company and admin
        Route::get('/myprofile',[CompanyController::class, 'myprofile'])->name('company.profile');
        
});


Route::get('company/otp-verify', [CompanyController::class, 'showOtpLoginForm'])->name('company.otp-form');
Route::post('company/otp-verify', [CompanyController::class, 'generateLoginOtp'])->name('company.generate_otp');



Route::get('company/export/', [ExportController::class, 'export_company'])->name('dashboard.company.export');


Route::post('/register', [CompanyController::class, 'store'])->name('company.store');
Route::get('company/register', [CompanyController::class, 'register'])->name('company.register');
Route::get('company/login', [CompanyController::class, 'login'])->name('company.login');

Route::post('company/login', [CompanyController::class, 'authenticate'])->name('company.authenticate');
  

    ////////***********Forgot password****************//////////////

  Route::get('/forgot-password', [CompanyController::class, 'forgotpassword_view'])->name('company.forgotpassword.view');
  Route::post('/forgot-password', [CompanyController::class, 'forget_password'])->name('company.forgotpassword');
  //Route::get('/otp-verify', [CompanyController::class, 'otp_verify_form'])->name('company.forgotpassword.otpverify');
  Route::post('/otp-authentication', [CompanyController::class, 'otp_authentication'])->name('company.verify_otp');
  Route::get('/reset-password', [CompanyController::class, 'reset_password_form'])->name('company.ResetPassword.form');
  Route::post('/reset-password', [CompanyController::class, 'reset_password_update'])->name('company.ResetPassword.update');
