@extends('admin.layouts.app')

@section('title', 'Companies')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush

@section('content')



@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Companies</div> <h4><a class="btn btn-primary" href="{{route('import')}}">Import Companies</a></h4>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection


@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-datatable table-responsive">
                    {{-- {{ $dataTable->table() }} --}}
                    {{-- <table class="table dataTable no-footer border-top" id="payment">
                        <thead>
                            <tr class="odd">
                            <th>Company Name</th>
                            <th>Location</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Fax</th>
                            <th>Subscribed By</th>
                            <th>Subscription status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even">
                                <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">Wbs</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Webeesocial</span><small class="emp_post text-truncate text-muted">It</small></div></div></td>
                                <td>New Delhi</td>
                                <td class="text-info">9890098899</td>
                                <td>admin@gmail.com</td>
                                <td>0900</td>
                                <td>Rahul</td>
                                <td><span class="badge bg-label-warning"> Pending</span></td>
                            </tr>
                            <tr class="odd">
                                <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">RB</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Refresh Botanical</span><small class="emp_post text-truncate text-muted">Ecommerce</small></div></div></td>
                                <td>New Raipur</td>
                                <td class="text-danger">9890098899</td>
                                <td>admin@gmail.com</td>
                                <td>03400</td>
                                <td>Ram</td>
                                <td> <span class="badge bg-label-success">Successful</span></td>
                            </tr>
                            <tr class="even">
                                <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">SW</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">swiftInnovation</span><small class="emp_post text-truncate text-muted">It Company</small></div></div></td>
                                <td>Pune</td>
                                <td class="text-primary">9890098890</td>
                                <td>admin@gmail.com</td>
                                <td>0900</td>
                                <td>Amit</td>
                                <td> <span class="badge bg-label-danger">Rejected </span></td>
                            </tr>
                            <tr>
                                <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-info">Ac</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Acma</span><small class="emp_post text-truncate text-muted">It Company</small></div></div></td>
                                <td>Raipur</td>
                                <td class="text-warning">9890098899</td>
                                <td>admin@gmail.com</td>
                                <td>0900</td>
                                <td>Danes</td>
                                <td><span class="badge bg-label-success">Successful</span></td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
   
@endpush


