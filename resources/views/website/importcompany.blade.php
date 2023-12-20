@extends('admin.layouts.app')
@section('title', 'Import Company')
@push('styles')
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush
@section('content')

<h4>Select your Excel file to import Companies</h4>
<div class="row mt-4">
    <div class="col-md-6">
        <form method="POST" action="{{ route('import.post') }}" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="abg" class="form-label">Choose a file</label>
                <input type="file" class="form-control" name="abg" id="abg" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</div>




@endsection
@push('scripts')
<script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
@endpush

    
    
