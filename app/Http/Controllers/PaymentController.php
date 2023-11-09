<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyContactDetail;
use App\Models\Company;

use App\Ccavenue\Crypto;

use App\Ccavenue\ccavRequestHandler;

// use App\ccavenue\ccavRequestHandler;
// use App\ccavenue\ccavResponseHandler;
// use App\ccavenue\Crypto;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function subscription_payment() 
    {
       
        $company_contact_details = Company::where('id',Auth::guard('company')->user()->id)->first();
        return view('website.payments.payment-form', compact('company_contact_details'));
    }



    public function makePayment( Request $request)
    {
        $cc_request = new ccavRequestHandler();
        $cc_request->init($request->all()); 
    }



    public function payment_success( Request $request) 
    {

            $crypto = new Crypto();
            $workingKey = '6F36707D0668636B26E60F3992104416';        //Working Key should be provided here.
            $encResponse = $request->encResp;           //This is the response sent by the CCAvenue Server
            $rcvdString = $crypto->decrypt($encResponse, $workingKey);        //Crypto Decryption used as per the specified working key.
            $order_status = "";
            $decryptValues = explode('&', $rcvdString);
            $dataSize = sizeof($decryptValues);

            return view('website.payments.payment-success-template', compact('workingKey', 'encResponse', 'rcvdString' , 'order_status', 'decryptValues','dataSize'));

    }
}
