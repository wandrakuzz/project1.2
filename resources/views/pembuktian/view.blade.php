@extends('navi_template.head')

@section('content')

<div class="col-sm-12">

      <div class="row">



          <table class="table table-striped">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Nama Aktiviti</th>
                  <th>Tarikh Mula</th>
                  <th>Tarikh Akhir</th>
                  <th>Masa Mula</th>
                  <th>Masa Akhir</th>
                  <th>Fail Pembuktian</th>
                  <th>Tindakan</th>

              </tr>
              </thead>
              <tbody>
                @forelse ($verifys as $verify)
              <tr>
                  <td>{{ $verify->id or ''}}</td>
                  <td>{{ $verify->activity_name or '' }}</td>
                  <td>{{ $verify->activity_date_start->toDayDateTimeString() }}</td>
                  <td>{{ $verify->activity_date_end or '' }}</input></td>
                  <td>{{ $verify->activity_time_start or '' }}</input></td>
                  <td>{{ $verify->activity_time_end or '' }}</td>
                  <td>{{ $verify->activity_report or '' }}</td>
                  <td>
                    <a href="{{ action('VerifyController@edit', $verify)}}" class="btn btn-primary" name="button">Bukti</a>
                  </td>

              </tr>

              @empty

              <tr>
                <td colspan="8">Tiada data</td>
              </tr>

              @endforelse
              </tbody>
          </table>

    </div>

</div>

@endsection
