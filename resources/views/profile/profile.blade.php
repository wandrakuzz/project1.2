@extends('navi_template.head')


@section('content')
<div class="container">
<div class="row">

<br>

</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


<div class="panel panel-info" style="margin-top:50px">
<div class="panel-heading">
  <h3 class="panel-title">Azwan<p class="pull-right">May 05,2014,03:00 pm </p></h3>

</div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-3 col-lg-3 " align="center">
      <img class="image-placeholder img-circle-profile" src="{{ $users[0]->profile->picture }}" style="width: 100px; height: 100px"/>
    </div>

    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>Nama Penuh:</td>
            <td>{{ $user->name }}</td>
          </tr>
          <tr>
            <td>Matrik No:</td>
            <td>{{ $user->matric_no }}</td>
          </tr>
          <tr>
            <td>Jantina</td>
            <td>{{ $user->profile->gender }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
          </tr>
          <tr>
            <td>Kursus</td>
            <td>{{ $user->profile->kursus }}</td>
          </tr>
          <tr>
            <td>Special Interest Group (SIG)</td>
            <td>{{ $user->kelab->name }}</td>
          </tr>
          <tr>
            <td>No Telefon</td>
            <td>{{ $user->profile->no_tel }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @if( $user->id == Auth::user()->id)
      <a href="{{ action ('ProfileController@edit',   $user->id) }}" class="btn btn-success">Kemaskini Maklumat Diri</a>
      <a href="student.html" class="btn btn-success">Tukar Katalaluan</a>
      @endif
    </div>
  </div>
</div>
     <div class="panel-footer">
            <a href="student.html" type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>  Keluar</a>

        </div>

      </tbody>
  </table>
</div>
</div>
</div>
@stop
