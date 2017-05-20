@extends('navi_template.head')

@section('content')

<div class="container">
  <div class="col-sm-12">
    <div class="panel-body">

      <div class="col-sm-10">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Aktiviti</th>
                <th>Tarikh Aktiviti</th>
                <th>Masa Aktiviti</th>
                <th>Kertas Kerja Aktiviti</th>
                <th>Tindakan</th>

            </tr>
            </thead>
            <tbody>
                @forelse ($kemaskinis as $kemaskini)
              <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $kemaskini->activity_name }}</td>
                <td>{{ $kemaskini->activity_date_start }}</td>
                <td>{{ $kemaskini->activity_time_start }}</td>
                <td><a href="{{ route('download', $kemaskini) }}">Download</a></td>
                <td>
                  <a href="{{ action ('KemaskiniController@create') }}" class="btn btn-primary">Kemaskini Aktiviti</a>
                  <a href="{{ action ('KemaskiniController@edit', $kemaskini->id)}}" class="btn btn-warning">Muatnaik Kertas Kerja</a>
                </td>
                <!-- <td>''
                  <button class="btn @if($kemaskini->path=='true') btn-primary @elseif($kemaskini->path=='false') btn-primary disabled @endif">Kemaskini Aktiviti</button>
                </td> -->

                @empty

                <tr>
                  <td colspan="8">Tiada data</td>
                </tr>

                @endforelse
                </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

@endsection
