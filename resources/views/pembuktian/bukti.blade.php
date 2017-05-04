@extends('navi_template.head')

@section('content')

<div class="container">
  <div class="col-sm-12">
    <div class="panel-body">
      <form class="form-horizontal" action="{{ action('VerifyController@store') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="">Nama Aktiviti: </label>
          <input class="form-control" type="text" name="activity_name" value=""></input>
        </div>
        <div class="form-group">
          <label for="">Tarikh Aktiviti: </label>
          <input class="form-control" type="text" name="activity_date_start" value=""></input>
        </div>

        <div class="form-group">
          <label for="">Jenis Pembuktian</label>
          <input class="form-control" type="text" name="activity_type" value=""></input>
        </div>
        <div class="form-group">
          <label for="">Fail Pembuktian</label>
          <input class="form-control" type="file" name="activity_report" value=""></input>
        </div>

        <div class="form-group ">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Hantar</button>
            </div>
        </div>


      </form>
    </div>

  </div>

</div>


@endsection
