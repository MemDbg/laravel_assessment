@extends('layout')
@section('title', 'Edit User')
@section('content')
  <h3>Edit User</h3>
  <form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input name="name" class="form-control" required value="{{ old('name', $user->name) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input name="email" type="email" class="form-control" required value="{{ old('email', $user->email) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Password (leave blank to keep current)</label>
      <input name="password" type="password" class="form-control">
    </div>
    <button class="btn btn-primary">Update</button>
  </form>
@endsection