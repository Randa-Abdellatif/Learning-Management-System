@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Course List</h1>

    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($courses->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->start_date->format('Y-m-d') }}</td>
                    <td>{{ $course->end_date->format('Y-m-d') }}</td>
                    <td>{{ Str::limit($course->description, 50) }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this course?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $courses->links() }}

    @else
        <p>No courses found.</p>
    @endif
</div>
@endsection