@extends('admin.layouts.app')
@section('title', 'Guests')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush

@section('content')

<button data-bs-toggle="modal" data-bs-target="#static" class="btn btn-primary text-center" id="filter_category" name="filter_category">Add Guest<span class='bx bx-filter ms-2'></span></button>

<div class="col-md-6">
    <div class="custom_search_filter text-center text-md-end">
        <div class="modal fade" id="static" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="modal-title mb-3 text-start">Add Guest</h4>
                                <form id="guestForm"  action="{{ route('guest.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" style="min-height: 50px;" class="form-control " id="guestName" name="name" placeholder="Enter your name" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" style="min-height: 50px;" class="form-control" id="guestEmail" name="email" placeholder="Enter your email" value="" required>
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4>Guests List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guests as $guest)
                        <tr>
                            <td>{{ $guest->name }}</td>
                            <td>{{ $guest->email }}</td>
                            <td>
                                <!-- Action buttons go here -->
                                {{-- <a href="{{ route('guest.edit', $guest->id) }}" class="btn btn-primary">Edit</a> --}}
                                <form action="{{ route('guest.destroy', $guest->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                
                            <!-- Add more cells for additional columns -->
                        </tr>
                        @endforeach
                        @if($guests->isEmpty())
                        <tr>
                            <td colspan="2">No guests found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script src="{{ asset('admin/') }}/assets/vendor/libs/datatables/datatables.js"></script>
<script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
@endpush


