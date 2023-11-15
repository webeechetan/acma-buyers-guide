@extends('admin.layouts.app')

@section('title', 'Pament')
@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush

@section('content')


<div>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="table dataTable no-footer border-top" id="payment">
                <thead>
                    <tr class="odd">
                    <th>id</th>
                    <th>Company Name</th>
                    <th>Payment Date</th>
                    <th>PPayment Mode</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td>#5089</td>
                        <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">Wbs</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Webeesocial</span><small class="emp_post text-truncate text-muted">It</small></div></div></td>
                        <td>12/8/23</td>
                        <td>Online</td>
                        <td><span class="badge bg-label-warning"> Pending</span></td>
                    </tr>
                    <tr class="odd">
                        <td>#5080</td>
                        <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">RB</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Refresh Botanical</span><small class="emp_post text-truncate text-muted">Ecommerce</small></div></div></td>
                        <td>1/8/23</td>
                        <td>Credit Card</td>
                        <td> <span class="badge bg-label-success">Successful</span></td>
                    </tr>
                    <tr class="even">
                        <td>#5081</td>
                        <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-success">SW</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">swiftInnovation</span><small class="emp_post text-truncate text-muted">It Company</small></div></div></td>
                        <td>1/9/23</td>
                        <td>Upi</td>
                        <td> <span class="badge bg-label-danger">Rejected </span></td>
                    </tr>
                    <tr>
                        <td>#5067</td>
                        <td><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-secondary">Ac</span></div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">Acma</span><small class="emp_post text-truncate text-muted">It Company</small></div></div></td>
                        <td>1/9/23</td>
                        <td>RozaarPay</td>
                        <td><span class="badge bg-label-success">Successful</span></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>



@endsection
@push('scripts')
    <script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script>
    new DataTable('#payment');
    
</script>

@endpush
