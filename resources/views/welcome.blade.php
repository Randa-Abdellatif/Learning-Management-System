<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to LMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.nav')
    <main class="py-5">
        <div class="container text-center">
            <h1 class="display-4">Welcome to the Learning Management System</h1>
            <p class="lead">Manage your courses, enroll, and expand your knowledge.</p>

            @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
            @else
                <a href="{{ route('courses.index') }}" class="btn btn-success btn-lg">View Courses</a>
            @endguest
        </div>
        <div class="container text-center mt-5">
            <a href="{{ route('contact.show') }}" class="btn btn-info btn-lg">Contact Us</a>
        </div>
    </main>

</body>

</html>
