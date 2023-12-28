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

<h4>Pending Profile Approve Requests</h4>
<div class="row">

    @if(isset($pendingRequests) && $pendingRequests->count() > 0)
        @foreach ($pendingRequests as $request)



            <div class="col-md-12 mb-4">
                <div class="card">
                    <div>
                    <h5 class="text-primary"> {{ $request->company->name }}</h5>
                    {{-- <h5 class="text-primary"> {{ optional($request->company)->name ?? 'No Company Name' }}</h5> --}}
                    </div>
                    <div class="profile-approve">
                        <!-- Decode JSON data and loop through it -->
                        @php
                            $profile = json_decode($request->data, true);
                        @endphp
                        

                        <table class="table mb-3" id="profile">
                            <thead>
                                <tr style="color: rgb(38, 5, 5);">
                                    <th>Field</th>
                                    <th>Old Value</th>
                                    <th>New Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profile as $key => $values)
                                    <tr>
                                        <td>{{ ucfirst(str_replace('_', ' ', $key)) }}</td>
                                        <td>{{ $values['old'] }}</td>
                                        <td>{{ $values['new'] }}</td>
                                    </tr>
                                @endforeach
                                {{-- @foreach ($profile as $key => $values)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        @if ($key === 'image' && $values['old'] !== 'NULL' && isImage($values['old']))
                                            <img src="{{ asset('storage/' . $values['old']) }}" alt="Old Image" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            {{ $values['old'] }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($key === 'image' && $values['new'] !== 'NULL' && isImage($values['new']))
                                            <img src="{{ asset('storage/' . $values['new']) }}" alt="New Image" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            {{ $values['new'] }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            --}}
                            
                            
                            </tbody>
                        </table>
                        
                    
                            <a href="{{ route('admin.profile.approve',$request->id) }}"><button type="submit" class="btn btn-success btn-sm">Approve</button></a>

                        
                        <form method="post" action="{{route('admin.profile.disapprove' , $request->id )}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Deny</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
            <span class="text text-danger"> No Pending Request</span>
    @endif
</div>




@endsection
@push('scripts')
<script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script>
   new DataTable('#profile');   
</script>
@endpush