<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

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

       
        $credentials = $request->only('email', 'password');

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

}
