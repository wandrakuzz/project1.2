<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Information</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('bootstrap/css/animate.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet"> -->

  </head>
  <body>
    <div class="container">
      <div class="wrap">
        <div class="col-sm-12">
          <h1>Edit User</h1>


          <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading" >Maklumat Pengguna</div>

        <form class="form-horizontal" action="{{ action('AdminController@update', $user[0]->id)}}" style="margin-top:30px;">

          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          @foreach($users as $user)
            <div class="form-group">
              <label class="control-label col-sm-2" for="text">Name :</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="email" name="name" value="{{ $user->name or '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Email:</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email or '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Matric No:</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="matric_no" value="{{ $user->matric_no or '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Password:</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" name="password" placeholder="Enter New Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
            @endforeach
          </form>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>
