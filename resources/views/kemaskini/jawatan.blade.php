@extends('navi_template.head')

@section('page-title', 'Jawatan')

@section('content')

<div class="col-sm-12">
<div class="container">

  <div class="row">

    <form class="form-horizontal" action="{{ action('KemaskiniController@store')}}" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <label class="col-sm-2 control-label">Ketua Program: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="kp" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Timbalan Ketua Program: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="tkp" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Setiausaha: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="su" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Timbalan Setiausaha: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="tsu" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Bendahari: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="bendahari" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Timbalan Bendahari: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="tbendahari" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Program: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajkprogram" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Publisiti: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajkpublisiti" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Tugas Khas: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajktugaskhas" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Cenderamata: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajkcenderamata" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Teknikal: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajkteknikal" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AJK Perhubungan: </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="ajkperhubungan" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>




  </div>

</div>

</div>

@endsection
