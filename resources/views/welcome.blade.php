@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to Dashboard</h1>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        console.log('Welcome to Dashboard');
    </script>
@endpush

@push('styles')
    <style>
        body {
            background-color: #f1f1f1;
        }
    </style>
@endpush