@extends('navi_template.lectrer')

@section('semak')

<div class="col-sm-12">
  <div class="container">
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
                @forelse ($suggests as $suggest)
              <tr>
                  <td>{{ $suggest->id or ''}}</td>
                  <td>{{ $suggest->user->name or '' }}</td>
                  <td>{{ $suggest->user->matric_no or '' }}</td>
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

@endsection
