@extends('admin.layouts.app')
@section('title', 'Banners')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
@endpush

@section('content')

<button data-bs-toggle="modal" data-bs-target="#static" class="btn btn-primary text-center" id="filter_category" name="filter_category">Add Banner<span class='bx bx-filter ms-2'></span></button>

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
                                <h4 class="modal-title mb-3 text-start">Add Banner</h4>
                                <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Banner Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="link" class="form-label">Banner Link</label>
                                        <input type="url" class="form-control" id="link" name="link">
                                    </div>
                                
                                
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
            <h4>Banner List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td>{{ $banner->title }}</td>
                            <td><img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" style="max-width: 100px; max-height: 100px;"></td>
                            <td>{{ $banner->link }}</td>
                            
                            <td>
                                <!-- Action buttons go here -->
                                
                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                
                            <!-- Add more cells for additional columns -->
                        </tr>
                        @endforeach
                        @if($banners->isEmpty())
                        <tr>
                            <td colspan="2">No Banner found</td>
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


