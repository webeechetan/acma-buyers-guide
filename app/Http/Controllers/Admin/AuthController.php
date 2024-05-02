<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Company\LoginOtpNotification;
use function Laravel\Prompts\alert;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'type' => '1'
        ];

        if (Auth::attempt($credentials)) {
            $this->alert('Success', 'You are logged in successfully','success');
            return redirect()->route('admin.dashboard');
        }
        $this->alert('Error', 'Invalid credentials','danger');
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        $this->alert('success', 'You are logged out successfully','success');
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function acmaMemberLogin(){
        return view('website.auth.acma-member-login');
    }

    public function createOtp(){
        return rand(100000,999999);
    }

    public function generateOtp(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if($user){
            $otp = $this->createOtp();
            $user->otp = $otp;
            try{
                $user->save();
                $user->notify(new LoginOtpNotification($user, $otp));
                return $this->sendResponse('Otp sent to your email address sucessfully','success');
            }catch(\Exception $e){
                return $this->sendResponse('Error during sending otp: ' . $e->getMessage(),'error');
            }
            
        }
        $this->alert('Error', 'Invalid email','danger');
        return redirect()->route('acma.member.login');
    }

    public function verifyOtp(Request $request){
        $rules = [
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ];

        $messages = [
            'otp.required' => 'Please enter otp',
            'otp.digits' => 'Please enter 6 digit otp',
        ];

        
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           return $this->sendError('Validation Error.', $validator->errors(), 422);
        }

        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();

        // dd($user);

        if(!$user){
            return $this->sendError('Invalid otp', [], 422);
        }

        $user->otp = null;

        try{
            $user->save();

            return $this->sendResponse('Otp verified successfully');

        }catch(\Exception $e){
            return $this->sendResponse('Error during verifying otp: ' . $e->getMessage(),'error');
        }

    }

}
