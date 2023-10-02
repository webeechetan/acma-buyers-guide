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

<div class="card">
    <div class="card-datatable table-responsive">
        <table id="emp" class="datatables-basic table border-top">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('scripts')

    <script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    {{-- <script src="{{ asset('admin/') }}/assets/js/tables-datatables-basic.js"></script> --}}
    <script src="{{ asset('admin/') }}/assets/js/datatable-init.js"></script>

    <script>
        dataTable('emp', "{{ route('admin.companies.data') }}")
    </script>

@endpush

