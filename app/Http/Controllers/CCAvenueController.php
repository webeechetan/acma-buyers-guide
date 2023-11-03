<?php

namespace App\Http\Controllers;

use App\Models\CCAvenue;
use Illuminate\Http\Request;

class CCAvenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('website.ccavenue.ccavRequestHandler');
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
    public function show(CCAvenue $cCAvenue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CCAvenue $cCAvenue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CCAvenue $cCAvenue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CCAvenue $cCAvenue)
    {
        //
    }
}
