@extends('navi_template.head')

@section('dashboard-style')
@endsection

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Senarai cadangan aktiviti</h2>
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
                         <th>Status</th>
                         <th>Cipta</th>
                         <th>Tindakan</th>
                     </tr>
                     </thead>
                     <tbody>
                       @forelse ($suggests as $suggest)
                     <tr>
                         <td>{{ $loop->iteration}}</td>
                         <td>{{ $suggest->user->name or '' }}</td>
                         <td>{{ $suggest->user->matric_no or '' }}</td>
                         <td>{{ $suggest->activity_name or '' }}</input></td>
                         <td>{{ $suggest->activity_date_start or '' }}</input></td>
                         <td>{{ $suggest->activity_summary or '' }}</input></td>
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
                         <td>{{ $suggest->created_at->diffForHumans() }}</td>
                         <td>
                             <form class="" action="{{route('suggest.destroy',$suggest->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                            
                             <a href="{{ route('suggest.show',$suggest->id)}}"><button type="button" class="btn btn-success btn-xs" name="button">Butiran</button></a>
                             <a href="{{ route('suggest.edit',$suggest->id)}}"><button type="button" class="btn btn-warning btn-xs" name="button">Kemaskini</button></a>
                             <button type="submit" class="btn btn-danger btn-xs" name="button">Buang</button>
                             </form>
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
