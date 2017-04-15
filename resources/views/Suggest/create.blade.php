@extends('navi_template.head')

@section('content')

<div class="col-sm-12">
  <div class="container">
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
</div>

@endsection
