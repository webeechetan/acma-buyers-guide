<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
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
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming max file size is 2MB
        ]);

        
        $imagePath = $request->file('image')->store('banners', 'public');

        
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->image = $imagePath; 

        
        $banner->save();

        return redirect()->back()->with('success', 'Banner added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $banner = Banner::find($id);
    
        
        if ($banner) {       
            
            $banner->delete();
            $this->alert('Success', 'Banner deleted successfully', 'success');
            return redirect()->route('banners');
        
        } else {
           
            $this->alert('Error', 'Invalid details', 'danger');
            return redirect()->back();
        }
    }
}
