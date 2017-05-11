@extends('navi_template.head')

@section('content')

<div class="col-sm-12">
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
                  <th>Jenis Pembuktian</th>
                  <th>Fail Pembuktian</th>
                  <!-- <th>Status</th> -->

              </tr>
              </thead>
              <tbody>

                <?php  $no=1; ?>
                @forelse ($pembuktians as $pembuktian)
              <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $pembuktian->user->profile->nama_penuh or '' }}</td>
                  <td>{{ $pembuktian->user->matric_no or '' }}</td>
                  <td>{{ $pembuktian->activity_name or '' }}</input></td>
                  <td>{{ $pembuktian->activity_date_start or '' }}</input></td>
                  <td>{{ $pembuktian->activity_type or '' }}</input></td>
                  <td><a href="{{ action('VerifyController@download', $pembuktian) }}">Download</a></td>
                  <!-- <td><button class="btn btn-warning">{{ $pembuktian->status }}</button></td> -->
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

@endsection
