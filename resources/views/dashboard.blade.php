@extends('layout')
@section('title', 'Dashboard')
@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Dashboard</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>
  </div>
  <p>Welcome, {{ auth()->user()->name }}.</p>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Quick actions</h5>
      <p class="card-text">Manage users via the Users section.</p>
      <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
    </div>
  </div>
@endsection