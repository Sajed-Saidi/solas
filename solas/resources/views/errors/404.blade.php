@extends('frontend.layouts.app')

@push('style')
    <style>
        .header {
            --background-color: #3a98d4;
        }
    </style>
@endpush

@section('content')
    <div class="custom-bg text-dark">
        <div class="d-flex align-items-center justify-content-center p-5 my-5">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-2 fw-medium mt-4">Oops! Page not found</p>
                <p class="mt-4 mb-5">The page you're looking for doesn't exist or has been moved.</p>
                <a href="/" class="btn btn-light fw-semibold rounded-pill px-4 py-2 read-more">
                    Go Home
                </a>
            </div>
        </div>
    </div>
@endsection
