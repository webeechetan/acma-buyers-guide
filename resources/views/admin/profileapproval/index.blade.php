@extends('admin.layouts.app')
@section('title', 'Profile Approal')
@push('styles')
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush
@section('content')

<!-- resources/views/admin/approval/index.blade.php -->

<h4>Pending Profile Approve Requests</h4>
<div class="row">
    @foreach ($pendingRequests as $request)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <!-- Decode JSON data and loop through it -->
                    @php
                        $profile = json_decode($request->data, true);
                    @endphp
                    

                    <table class="table">
                        <thead>
                            <tr style="color: red;">
                                <th>Field</th>
                                <th>Old Value</th>
                                <th>New Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile as $key => $values)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $values['old'] }}</td>
                                    <td>{{ $values['new'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <form method="post" action="{{ route('admin.profileUpdate.approved', $request->id) }}">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-success sm">Approve</button>
                    </form>

                    <form method="post" action="{{route('admin.profileUpdateRequest.destroy' , $request->id )}}">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-danger sm">Disapprove</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>




@endsection
@push('scripts')
<script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script>
   new DataTable('#payment');
   
</script>
@endpush