@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Cadangan Aktiviti</a></li>
                    <li class="active"><a data-toggle="tab" href="#tab-2"> Status Cadangan </a></li>
                </ul>
                <div class="tab-content">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action('SuggestController@store') }}" method="POST">

                              {{ csrf_field() }}
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Aktiviti:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="activity_name" placeholder="Aktiviti"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tarikh:</label>
                                    <div class="col-sm-10"><input type="date" class="form-control" name="activity_date" placeholder="" format="dd/mm/yy"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ringkasan Aktiviti:</label>
                                    <div class="col-sm-10">
                                        <textarea rows="6" type="text" class="form-control" name="activity_summary" placeholder="......"></textarea>

                                        </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Hantar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- End of first tab -->

                    <!-- Start of 2nd Tab -->
                    <div id="tab-2" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action('SuggestController@store') }}" method="POST">

                              {{ csrf_field() }}
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Aktiviti:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="activity_name" placeholder="Aktiviti"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tarikh:</label>
                                    <div class="col-sm-10"><input type="date" class="form-control" name="activity_date" placeholder="" format="dd/mm/yy"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ringkasan Aktiviti:</label>
                                    <div class="col-sm-10">
                                        <textarea rows="6" type="text" class="form-control" name="activity_summary" placeholder="......"></textarea>

                                        </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Hantar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- End of 2nd Tab -->

                  </div>
                </div>
              </div>
              @endsection
