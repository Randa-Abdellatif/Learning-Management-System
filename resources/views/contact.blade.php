@extends('layouts.app')

@section('content')
<div class="container py-5">
  <h1>Contact Us</h1>

  @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <div class="form-group mt-3">
      <label for="name">Name</label>
      <input type="text"
             id="name"
             name="name"
             class="form-control @error('name') is-invalid @enderror"
             value="{{ old('name') }}">
      @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group mt-3">
      <label for="email">Email</label>
      <input type="email"
             id="email"
             name="email"
             class="form-control @error('email') is-invalid @enderror"
             value="{{ old('email') }}">
      @error('email')
        <span class="invalid-feedback">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group mt-3">
      <label for="message">Message</label>
      <textarea id="message"
                name="message"
                rows="5"
                class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
      @error('message')
        <span class="invalid-feedback">{{ $message }}</span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-3">Send Message</button>
  </form>
</div>
@endsection