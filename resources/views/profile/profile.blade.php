@extends('layouts.app')

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
    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>
          @foreach ($profiles as $profile)
          <tr>
            <td>Nama Penuh:</td>
            <td>{{ $profile->user->name }}</td>
          </tr>
          <tr>
            <td>Matrik No:</td>
            <td>{{ $profile->user->matric_no }}</td>
          </tr>
          <tr>
            <td>Jantina</td>
            <td>{{ $profile->gender }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ $profile->user->email }}</td>
          </tr>
          <tr>
            <td>Kursus</td>
            <td>{{ $profile->kursus }}</td>
          </tr>
          <tr>
            <td>Special Interest Group (SIG)</td>
            <td>{{ $profile->sig }}</td>
          </tr>
          <tr>
            <td>No Telefon</td>
            <td>{{ $profile->no_tel }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="profileedit.html" class="btn btn-success">Kemaskini Maklumat Diri</a>
      <a href="student.html" class="btn btn-success">Tukar Katalaluan</a>
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
