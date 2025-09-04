@extends('layout')
@section('title', 'Create User')
@section('content')
  <h3>Create User</h3>
  <form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input name="name" class="form-control" required value="{{ old('name') }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input name="email" type="email" class="form-control" required value="{{ old('email') }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Password (leave blank to auto-generate)</label>
      <input name="password" type="password" class="form-control">
    </div>
    <button class="btn btn-primary">Save</button>
  </form>
@endsection