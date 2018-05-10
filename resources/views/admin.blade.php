@include('admin.delete')
@extends('layouts.admin')
@section('content')
{{-- <div class="container"> --}}
  {{-- <div class="wrap"> --}}
  <div class="col-sm-12">
      <h1>User Management</h1>
      <a href="{{ action ('AdminController@create') }}" class="btn btn-success center">Tambah Pengguna</a>
  </div>
    <div class="col-sm-6" style="padding-top:20px;">

      <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="padding-bottom:20px;">
      <b>Senarai Penasihat</b>
    </div>

    <!-- Table -->
    <table class="table">

      <thead>
        <tr>
          {{-- <th>No</th> --}}
          <th>Name</th>
          <th>Matric</th>
          <th>Email</th>
          <th>SIG</th>
          {{-- <th>Role</th> --}}
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($penasihats as $penasihat)
        {{ method_field('DELETE') }}
        <tr>
          <td>{{ $penasihat->name or ''}}</td>
          <td>{{ $penasihat->matric_no or ''}}</td>
          <td>{{ $penasihat->email or ''}}</td>
          <td>{{ $penasihat->kelab->name or ''}}</td>
          <td>
            <form action="{{ action ('AdminController@destroy',   $penasihat->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Delete</button>
              <a href="{{ action ('AdminController@edit',   $penasihat->id) }}" class="btn btn-warning" >Edit</a>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
      <div class="pull-right">
          {{ $penasihats->links() }}
      </div>
  </div>

  <div class="col-sm-6" style="padding-top:20px;">

    <div class="panel panel-default" >
  <!-- Default panel contents -->
  <div class="panel-heading" style="padding-bottom:20px;">
    <b>Senarai Pelajar</b>
  </div>

  <!-- Table -->
  <table class="table">

    <thead>
      <tr>
        {{-- <th>No</th> --}}
        <th>Name</th>
        <th>Matric</th>
        <th>Email</th>
        <th>SIG</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pelajars as $user)
      {{ method_field('DELETE') }}
      <tr>
        {{-- <td>{{ $loop->iteration }}</td> --}}
        <td>{{ $user->name or ''}}</td>
        <td>{{ $user->matric_no or ''}}</td>
        <td>{{ $user->email or ''}}</td>
        <td>{{ $user->kelab->name or ''}}</td>
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
    <div class="pull-right">
        {{ $pelajars->links() }}
    </div>
  </div>

@endsection
