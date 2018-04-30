@extends('navi_template.head')

@section('dashboard-style')
@endsection

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Cadang Aktiviti</h1>
        </div>
        <div class="panel-body">
             <a href="{{ action ('SuggestController@create')}}" class="mb-5 btn btn-success" style="margin-bottom:10px;">Cadang Aktiviti</a>
             <div class="table-responsive">
                 <table class="table table-striped" id="myTable" cellspacing="0" width="100%">
                     <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama</th>
                         <th>No Matrik</th>
                         <th>Nama Aktiviti</th>
                         <th>Tarikh</th>
                         <th>Ringkasan</th>
                         <th>Cipta</th>
                         <th>Status</th>

                     </tr>
                     </thead>
                     <tbody>
                       @forelse ($suggests as $suggest)
                     <tr>
                         <td>{{ $loop->iteration}}</td>
                         <td>{{ $suggest->user->name or '' }}</td>
                         <td>{{ $suggest->user->matric_no or '' }}</td>
                         <td>{{ $suggest->activity_name or '' }}</input></td>
                         <td>{{ $suggest->activity_time_start or '' }}</input></td>
                         <td>{{ $suggest->activity_summary or '' }}</input></td>
                         <td>{{ $suggest->created_at->diffForHumans() }}</td>
                         <td>
                             <span class="label @if($suggest->status=='rejected') label-danger
                             @elseif ($suggest->status=='approved') label-success
                             @else label-info
                             @endif">
                             @if($suggest->status=='rejected') Ditolak
                             @elseif ($suggest->status=='approved') Diterima
                             @else Pending
                             @endif
                             </span>
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
  </div>


@endsection

@section('scripts')

@endsection
