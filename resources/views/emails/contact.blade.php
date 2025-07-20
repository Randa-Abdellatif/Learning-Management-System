<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
</head>

<body>
    <h2>New Contact Form Submission</h2>
    {{-- <ul>
        @foreach ($formData as $key => $value)
            <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
        @endforeach
    </ul> --}}
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Message:</strong><br>{!! nl2br(e($formData['message'])) !!}</p>
</body>

</html>
