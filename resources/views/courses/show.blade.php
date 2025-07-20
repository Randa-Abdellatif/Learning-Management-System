@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $course->title }}</h1>
    
    <p><strong>Start Date:</strong> {{ $course->start_date->format('Y-m-d') }}</p>
    <p><strong>End Date:</strong> {{ $course->end_date->format('Y-m-d') }}</p>
    <p>{{ $course->description }}</p>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
</div>
@endsection