@extends('navi_template.head')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Muatnaik Kertas Kerja</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action=" {{ action('KemaskiniController@update', $shows)}}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}


                                <div class="form-group {{ $errors->has('activity_name') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label" for="activity_name">Nama Aktiviti:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="activity_name" name="activity_name" value="{{ $shows->activity_name}}" >
                                      @if ($errors->has('activity_name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('activity_name') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('activity_date_start') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label" for="activity_date_start">Tarikh:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control"  id="activity_date_start" name="activity_date_start" value="{{ $shows->activity_date_start}}" >
                                      @if ($errors->has('activity_date_start'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('activity_date_start') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('activity_time_start') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label" for="activity_time_start">Masa:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control"  id="activity_time_start" name="activity_time_start" value="{{ $shows->activity_time_start}}" >
                                      @if ($errors->has('activity_time_start'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('activity_time_start') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('kertas_kerja') ? 'has-error' : '' }}">
                                    <label class="col-sm-2 control-label">Laporan Aktiviti:</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="kertas_kerja" name="kertas_kerja" class=""></input>
                                        @if ($errors->has('kertas_kerja'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('kertas_kerja') }}</strong>
                                            </span>
                                        @endif
                                        </div>
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

@endsection
