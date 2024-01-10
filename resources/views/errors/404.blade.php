{{-- @extends('website.layouts.app')
@section('title', "Page Not Found")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="error-title">404</h1>
            <h2 class="error-sub-title">Page Not Found</h2>
            <p class="error-message">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
            <a href="{{ route('company.dashboard') }}" class="btn btn-primary mt-3">Go to Home Page</a>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Page Not Found</h1>
    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">Go to Home Page</a>
</body>
</html>