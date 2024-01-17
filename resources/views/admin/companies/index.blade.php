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
<div class="row">
    <div class="col-md-12">
        <div class="card w-100 py-4">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-md-between justify-content-center justify-content-sm-between flex-wrap">
                    <h4 class="text-primary mb-md-0 mb-3"><b>Companies</b></h4> 
                    <div class="multiple-btn">
                        <a class="btn btn-primary" href="{{ route('import') }}">Import Companies</a>
                        <a class="btn btn-primary" href="{{ route('download.excel') }}">Export All</a>
                        <a class="btn btn-primary" href="{{ route('export-word') }}">Export in Word</a>
                    </div>
                </div>
               <div class="companies-table">
               {{ $dataTable->table() }}
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


