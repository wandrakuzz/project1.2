@extends('navi_template.head')

@section('content')

<div class="col-sm-12">

      <div class="row">
      <a href="{{ action ('SuggestController@create')}}" class="btn btn-primary pull-right" >Cadang Aktiviti</a>


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
                  <td><button class="btn @if($suggest->status=='rejected') btn-danger @elseif ($suggest->status=='approved') btn-success @else btn-info @endif">@if($suggest->status=='rejected') Ditolak @elseif ($suggest->status=='approved') Diterima @else Pending @endif</button></td>
              </tr>

              @empty

              <tr>
                <td colspan="4">Tiada data</td>
              </tr>

              @endforelse
              </tbody>
          </table>

    </div>

</div>

@endsection
