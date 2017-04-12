@extends('navi_template.head')

@section('page-title', 'Suggestion')

@section('content')

    <div class="col-sm-12">
        <div class="container">
            <div class="">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#menu1"> Cadangan Aktiviti</a></li>
                  <li><a data-toggle="tab" href="#menu2"> Status Cadangan </a></li>
              </ul>

              <div class="tab-content">

                <div id="menu1" class="tab-pane active">
                  <br><br>
                  <form class="form-horizontal" action="{{ action('SuggestController@store') }}" method="POST">

                    {{ csrf_field() }}
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Aktiviti:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="activity_name" placeholder="Aktiviti">
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Tarikh Mula:</label>
                          <div class="col-sm-4"><input type="text" id="tarikh-mula" class="form-control datepicker" name="activity_date_start" placeholder="" format="dd/mm/yy"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Tarikh Akhir:</label>
                          <div class="col-sm-4"><input type="text" id="tarikh-akhir" class="form-control datepicker" name="activity_date_end" placeholder="" format="dd/mm/yy"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Masa Mula:</label>
                          <div class="col-sm-4"><input type="text" class="form-control timepicker" name="activity_time_start" placeholder="" format="dd/mm/yy"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Masa Akhir:</label>
                          <div class="col-sm-4"><input type="text" class="form-control timepicker" name="activity_time_end" placeholder="" format="dd/mm/yy"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Ringkasan Aktiviti:</label>
                          <div class="col-sm-8">
                              <textarea rows="6" type="text" class="form-control" name="activity_summary" placeholder="......"></textarea>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-md-4">
                              <button type="submit" class="btn btn-primary">Hantar</button>
                          </div>
                      </div>
                  </form>
                </div>
                <div id="menu2" class="tab-pane">
                  <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Matrik</th>
                                <th>Nama Aktiviti</th>
                                <th>Tarikh</th>
                                <th>Ringkasan</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                              @forelse ($users[0]->suggest as $suggest)
                            <tr>
                                <td>{{ $suggest->id or ''}}</td>
                                <td>{{ $users[0]->name or '' }}</td>
                                <td>{{ $users[0]->matric_no or '' }}</td>
                                <td>{{ $suggest->activity_name or '' }}</input></td>
                                <td>{{ $suggest->activity_time_start or '' }}</input></td>
                                <td>{{ $suggest->activity_summary or '' }}</input></td>
                                <td><button class="btn btn-success">Terima</button></td>
                            </tr>

                            @empty

                            <tr>
                              <td colspan="7">Tiada data</td>
                            </tr>

                            @endforelse
                            </tbody>
                        </table>
                    </div>

                  </div>
                </div>
                </div>
            </div>
        </div>
      </div>
@endsection
