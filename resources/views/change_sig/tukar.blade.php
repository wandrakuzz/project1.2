@extends('navi_template.head')

@section('content')

<div class="col-sm-12">
    <form class="form-horizontal" action="{{ action ('TukaranController@change' , $tukarans[0]->id) }}" method="POST" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{ method_field('PATCH') }}


      <div class="panel panel-default" style="border-bottom: 0px; box-shadow: none;">
        <div class="panel-heading">Permohonan tukaran SIG</div>
        <div class="panel-body text-center">

            <div class="form-group"><label class="col-sm-2 control-label">Nama :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" placeholder="Aktiviti" value="{{ $tukarans[0]->name }}" disabled></input>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">No Matrik :</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="matric_no" placeholder="Nama Penuh" value="{{ $tukarans[0]->matric_no }}" disabled></input>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Kelab:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kelab_baru">
                      <option value="" disabled selected>Please Select</option>
                      @foreach($sigs as $sig)
                        <option value="{{ $sig->name }}">{{ $sig->name }}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Alasan:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="alasan" placeholder="" value="{{ $tukarans[0]->alasan }}"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Hantar</button>
                </div>
            </div>
        </div>
        </form>
</div>

@endsection
