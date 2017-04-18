@extends('navi_template.head')

@section('content')

<div class="col-sm-12">

      <div class="row">



          <table class="table table-striped">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Nama Aktiviti</th>
                  <th>Tarikh Mul a</th>
                  <th>Tarikh Akhir</th>
                  <th>Masa Mula</th>
                  <th>Masa Akhir</th>
                  <th>Tindakan</th>

              </tr>
              </thead>
              <tbody>
                @forelse ($verifys as $verify)
              <tr>
                  <td>{{ $verify->id or ''}}</td>
                  <td>{{ $verify->activity_name or '' }}</td>
                  <td>{{ $verify->activity_date_start or '' }}</td>
                  <td>{{ $verify->activity_date_end or '' }}</input></td>
                  <td>{{ $verify->activity_time_start or '' }}</input></td>
                  <td>{{ $verify->activity_time_end or '' }}</td>
                  <td>
                    <a href="{{ action('VerifyController@bukti',$verify->id)}}" class="btn btn-primary" name="button">Tolak</a>
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
