<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

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

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guests,email|max:255',
        ]);
    
        // Create a new Guest instance
        $guest = new Guest();
        $guest->name = $validatedData['name'];
        $guest->email = $validatedData['email'];
        
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

        dd('login');
        return view('guests.auth.login');
    }
}
