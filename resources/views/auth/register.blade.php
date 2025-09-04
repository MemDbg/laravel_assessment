@extends('layout')
@section('title', 'Register')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h3>Register</h3>
      <form method="POST" action="{{ url('/register') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
@endsection