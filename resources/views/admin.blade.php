@include('admin.delete')
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="wrap">
    <div class="col-sm-12">
      <h1>User Management</h1>


      <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="padding-bottom:20px;">
      <b>Senarai Pengguna</b>
      <a href="{{ action ('AdminController@create') }}" class="btn btn-primary pull-right center">Add User</a>
    </div>

    <!-- Table -->
    <table class="table">

      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Matric</th>
          <th>Email</th>
          <th>SIG</th>
          <th>Role</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        {{ method_field('DELETE') }}
        <tr>
          <td>{{ $user->id or ''}}</td>
          <td>{{ $user->name or ''}}</td>
          <td>{{ $user->matric_no or ''}}</td>
          <td>{{ $user->email or ''}}</td>
          <td>{{ $user->kelab->name or ''}}</td>
          <td>{{ $user->user_group or ''}}</td>
          <td>
            <form action="{{ action ('AdminController@destroy',   $user->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Delete</button>
              <a href="{{ action ('AdminController@edit',   $user->id) }}" class="btn btn-warning" >Edit</a>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>

  </div>

</div>
@endsection
