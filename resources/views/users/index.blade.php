@extends('layout')
@section('title','Users')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Users</h2>
  <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>
</div>
<table class="table table-striped">
  <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($users as $u)
    <tr>
      <td>{{ $u->id }}</td>
      <td>{{ $u->name }}</td>
      <td>{{ $u->email }}</td>
      <td>{{ $u->role ?? 'user' }}</td>
      <td>
        <a href="{{ route('users.edit',$u) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('users.destroy',$u) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this user?');">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $users->links() }}
@endsection
