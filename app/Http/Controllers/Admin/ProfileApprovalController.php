<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyUpdateRequest;
use Illuminate\Http\Request;

class ProfileApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Retrieve pending update requests
            $pendingRequests = CompanyUpdateRequest::where('status', 'pending')->get();

            return view('admin.profileapproval.index', compact('pendingRequests'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request = CompanyUpdateRequest::findOrFail($id);

        $NewData = json_decode($request->data, true);
        $company_id = $request->company_id;

        foreach ($NewData as $key => $values) {
            $company_id->$key = $values['new'];
        }

        $company_id->save();
    


        $request->status = 'approved';
        $company_id->save();

        $this->alert('Success', 'Details Approved sucessfully' , 'success');
        return view('admin.profileapproval.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = CompanyUpdateRequest::findOrFail($id);

        $request->status = 'disapproved';
        $request->save();

        $this->alert('Success', 'Profile Update Request Rejected' , 'success');
        return view('admin.profileapproval.index');
    }
}
