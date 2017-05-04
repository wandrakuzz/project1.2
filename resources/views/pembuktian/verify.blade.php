@extends('navi_template.head')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Pembuktian Aktiviti</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action('VerifyController@update', $bukti) }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}


                                <div class="form-group {{ $errors->has('activity_name') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label" for="activity_name">Nama Aktiviti:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="activity_name" name="activity_name" value="{{ $bukti->activity_name}}" >
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
                                      <input type="text" class="form-control"  id="activity_date_start" name="activity_date_start" value="{{ $bukti->activity_date_start}}" >
                                      @if ($errors->has('activity_date_start'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('activity_date_start') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('activity_type') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Jenis Pembuktian:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="activity_type" name="activity_type" placeholder="Subjek Pembuktian">
                                      @if ($errors->has('activity_type'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('activity_type') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('activity_report') ? 'has-error' : '' }}">
                                    <label class="col-sm-2 control-label">Laporan Aktiviti:</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="activity_report" name="activity_report" class=""></input>
                                        @if ($errors->has('activity_report'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('activity_report') }}</strong>
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
