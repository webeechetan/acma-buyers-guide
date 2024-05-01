<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $guests = Guest::all();
        return view('admin.guests.index', compact('guests'));
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

        $request->validate([
            'username' => 'required|string|unique:guests',
            'password' => 'required|min:6',
        ]);
    
        // Create a new Guest instance
        $guest = new Guest();
        $guest->username = $request->username;
        $guest->password = Hash::make($request->password);
        
        // Save the guest record
        $guest->save();
        $this->alert('success', 'Guest added successfully', 'success');
        return redirect()->back()->with('success', 'Guest added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guest = Guest::find($id);

        if ($guest) {       
            
            $guest->delete();
    
            $this->alert('Success', 'Guest person deleted successfully', 'success');
            return redirect()->route('guest');
        } else {
            $this->alert('Error', 'Invalid details', 'danger');
            return redirect()->back();
        }
    

    }

    public function login()
    {
        return view('website.auth.guest-login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $res = Auth::guard('guest')->attempt(['username' => $request->username, 'password' => $request->password]);

        if ($res) {
            session('guard', 'guest');
            return redirect()->route('company.dashboard');
        } else {
            $this->alert('Error', 'Invalid login details', 'danger');
            return redirect()->back()->with('error', 'Invalid login details');
        }
    }
}
