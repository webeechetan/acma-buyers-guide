<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
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
use App\Exports\CompanyExportPDF;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;





Route::get('/download-excel/{company_ids?}', function (Request $request, $companyIds = null) {

    // Convert comma-separated company_ids to an array
    $companyIdsArray = $companyIds ? explode(',', $companyIds) : $request->input('company_ids');

   
    if ($companyIdsArray) {
        // Download for specific company IDs
        return Excel::download(new AdminCompanyExport($companyIdsArray), 'ACMA Buyers Guide.xlsx');
    } else {
        // Download for all records
    
        return Excel::download(new AdminCompanyExport(), 'ACMA Buyers Guide.xlsx');
    }
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
    $company_export = new CompanyExportWord();
    $company_export->export();
})->name('export-word');



Route::get('/download-pdf', function () {

    //dd('downlo');
   $pdfPath = public_path('Acma Buyers Guide.pdf');
    //  dd($pdfPath);
    if (File::exists($pdfPath)) {
        return response()->download($pdfPath, 'Acma Buyers Guide.pdf');
    } else {
        abort(404, 'PDF file not found');
    }
})->name('download-All');

// Route::get('/test/{id}', function (Request $request, $id) {
//     return Excel::download(new CompanyExportPDF($id), 'companies.pdf', \Maatwebsite\Excel\Excel::MPDF);
// });


// Route::get('/test/{id}', function ($id) {
//     $companyExport = new CompanyExportPDF($id);
// });


Route::get('/test/{id}', function ($id) {
    return \Maatwebsite\Excel\Facades\Excel::download(new CompanyExportPDF($id), 'Acma Buyers Guide.pdf');
});



Route::get('/import', function () {
    return view('website.importcompany');
})->name('import'); // Yo



//This function to import on admin side///
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

    Route::delete('/companies/destroy/{id}', [AdminCompanyController::class, 'destroy'])->name('admin.company.destroy');
    Route::get('/companies', [CompanyController::class, 'index'])->name('admin.companies');
    Route::get('/companies-data', [CompanyController::class, 'companiesData'])->name('admin.companies.data');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [ProfileApprovalController::class, 'index'])->name('admin.profile.approval');
    Route::get('/profile/approve/{id}', [ProfileApprovalController::class, 'update'])->name('admin.profile.approve');
    Route::delete('/profile/disapprove/{id}', [ProfileApprovalController::class, 'destroy'])->name('admin.profile.disapprove');
    Route::get('/edit-details', function () {  
        return view('admin.edit-emailer');
    });

    Route::post('/companies/conversion-rate', [CompanyController::class, 'CurrencyconversionRate'])->name('admin.companies.conversionrate');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
});


/************* Company Routes ****************/

Route::middleware(['company.auth'])->prefix('company')->group(function () {

        Route::get('/dashboard/{filter?}', [CompanyController::class, 'dashboard'])->name('company.dashboard');     
        Route::get('/fill-up-details', [CompanyController::class, 'fillUpDetails'])->name('company.fillUpDetails');
        Route::post('/fill-up-details', [CompanyController::class, 'fillUpDetailsStore'])->name('company.fillUpDetailsStore');
        Route::get('/logout', [CompanyController::class, 'logout'])->name('company.logout');

        /************* payments Routes ****************/
        Route::get('/view-company/{id}', [CompanyController::class, 'view_company'])->name('company.view_company');
        
        ////////////Emailer template for company detals update for company and admin
        Route::get('/myprofile',[CompanyController::class, 'myprofile'])->name('company.profile');

        ////Download all details once we enter in company  
        
        Route::get('/export/{id}', [ExportController::class, 'exportToPDF'])->name('exportToPDF');
        
});


Route::get('company/otp-verify', [CompanyController::class, 'showOtpLoginForm'])->name('company.otp-form');
Route::post('company/otp-verify', [CompanyController::class, 'generateLoginOtp'])->name('company.generate_otp');

// Route::get('company/export/', [ExportController::class, 'export_company'])->name('dashboard.company.export');
Route::get('company/export/', [ExportController::class, 'exportMultipleCompanyPDF'])->name('dashboard.company.export');

//This route will help to download all data in pdf for website in book formate
Route::get('company/export-all', [ExportController::class, 'exportAllCompanyPDF'])->name('dashboard.company.exportAll');


Route::post('/register', [CompanyController::class, 'store'])->name('company.store');
Route::get('company/register', [CompanyController::class, 'register'])->name('company.register');
Route::get('company/login', [CompanyController::class, 'login'])->name('company.login');

Route::post('company/login', [CompanyController::class, 'authenticate'])->name('company.authenticate');
  
    ////////***********Forgot password****************//////////////

//   Route::get('/forgot-password', [CompanyController::class, 'forgotpassword_view'])->name('company.forgotpassword.view');
//   Route::post('/forgot-password', [CompanyController::class, 'forget_password'])->name('company.forgotpassword');
  //Route::get('/otp-verify', [CompanyController::class, 'otp_verify_form'])->name('company.forgotpassword.otpverify');
  Route::post('/otp-authentication', [CompanyController::class, 'otp_authentication'])->name('company.verify_otp');
  Route::get('/reset-password', [CompanyController::class, 'reset_password_form'])->name('company.ResetPassword.form');
  Route::post('/reset-password', [CompanyController::class, 'reset_password_update'])->name('company.ResetPassword.update');
