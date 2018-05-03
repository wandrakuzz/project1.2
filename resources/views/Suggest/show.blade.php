@extends('navi_template.head')

@section('content')
    <div class="panel panel-default" style="width:400px;">
        <div class="panel-heading">
            <div class="panel-title" style="font-size:32px;">
                <center><b>{{ $cadang->activity_name }}</b></center>
            </div>
        </div>
        <div class="panel panel-body" style="padding:20px 20px 20px 20px;">
            <dt style="padding:10px 10px 0px 10px;">Nama Aktiviti</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_name }}</dd>
            <dt style="padding:10px 10px 0px 10px;">Tarikh Mula</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_date_start }}</dd>
            <dt style="padding:10px 10px 0px 10px;">Tarikh Akhir</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_date_end }}</dd>
            <dt style="padding:10px 10px 0px 10px;">Masa Mula</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_time_start }}</dd>
            <dt style="padding:10px 10px 0px 10px;">Masa Akhir</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_time_end }}</dd>
            <dt style="padding:10px 10px 0px 10px;">Ringkasan Akiviti</dt>
            <dd style="padding:10px 10px 10px 10px;">{{ $cadang->activity_summary }}</dd>
        </div>
    </div>
@endsection
