{{-- @extends('layouts.app')

@section('content')
    <div class="container text-center py-5">
        <a href="{{ route('courses.index') }}" class="btn btn-success btn-lg">
            View Courses
        </a>
    </div>
@endsection --}}

{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="font-weight-light">Welcome back, {{ Auth::user()->name }}!</h2>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8 m-auto">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-list fa-2x text-success mb-2"></i>
                        <h3 class="card-title">{{ $totalCoursesCount ?? 0 }}</h3>
                        <p class="card-text">All Available Courses</p>
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-success btn-sm">Browse All</a>
                    </div>
                </div>
            </div>
@endsection
