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

    <h4 class="text-primary"><b>All Profile Changes Request</b></h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills d-flex gap-2 mb-4">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.profile.approval')}}">Pending Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.profile.approved')}}">Approved Request</a>
                </li>
        
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane p-0 container active" id="pending">
                    <div class="row">
                        @if(isset($pendingRequests) && $pendingRequests->count() > 0)
                            @foreach ($pendingRequests as $request)
                                <div class="col-md-12 mb-4">
                                    <div class="card">
                                        <div>
                                        <div class="text-primary">
                                            <b>{{ $request->company->name }}</b> has requested to update their
                                            <b> 
                                                @foreach(Str::ucsplit($request->modal) as $word) 
                                                    {{ $word }} 
                                                @endforeach
                                            </b>
                                            {{-- <b>{{ optional($request->company)->name ?? 'No Company Name' }}</b> has requested to update their @foreach(Str::ucsplit($request->modal) as $word) {{ $word }} @endforeach --}}
                                        </div>
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
                                                </tbody>
                                            </table>
                                            
                                        
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('admin.profile.approve',$request->id) }}"><button type="submit" class="btn btn-success btn-sm">Approve</button></a>                    
                                                    <form method="post" action="{{route('admin.profile.disapprove' , $request->id )}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Deny</button>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- paginations --}}

                            <div class="d-flex justify-content-center">
                                {{ $pendingRequests->links() }}
                            </div>

                        @else
                            <span class="text text-danger"> No Pending Request</span>
                        @endif
                    </div>
                </div>
                <div class="tab-pane container fade" id="approve">
                    <div class="row">
                    @if(isset($approvedRequests) && $approvedRequests->count() > 0)
                        @foreach ($approvedRequests as $request)
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

                                        <table class="table mb-3" id="approved-requests">
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
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- paginations --}}

                        <div class="d-flex justify-content-center">
                            {{ $approvedRequests->withQueryString()->links() }}
                        </div>
                    @else
                            <span class="text text-danger"> No Approved Request</span>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>

    </script>
@endpush