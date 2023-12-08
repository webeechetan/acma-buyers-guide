<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyUpdateRequest;
use App\Models\Company;
use App\Notifications\Company\UpdateApprovedNotification;
use Illuminate\Http\Request;

class ProfileApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function update(Request $request, int $id)
    {
        $company_update_request = CompanyUpdateRequest::find($id);

        // getting details to send the email notification

        $company_id = $company_update_request->company_id;
        $company = Company::find($company_id);

        // above getting details to send the email notification
        
        $res = $company_update_request->approve();
        if($res){
            $company_update_request->notify(new UpdateApprovedNotification($company_update_request, $company));
            $this->alert('Success', 'Details Approved sucessfully' , 'success');
        }
        else{
            $this->alert('Error', 'Something went wrong' , 'error');
        }
        return redirect()->route('admin.profile.approval');
        
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
