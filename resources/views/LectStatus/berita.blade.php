@extends('navi_template.head')

@section('page-title')
    <h2>Dashboard</h2>
@endsection

@section('content')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">{{ Auth::user()->kelab->name }}</span>
                        <h5>Jumlah Ahli SIG</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $membersig->count() }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">SIG FTSM</span>
                                <h5>Jumlah SIG</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{ $sigs->count() }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Ahli Berdaftar</span>
                                <h5>Jumlah Kesemua Ahli SIG</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{ $members->count() }}</h1>
                            </div>
                        </div>
                    </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        {{-- <span class="label label-info pull-right">Ahli Berdaftar</span> --}}
                        <h5>Nama Ahli</h5>
                    </div>
                    <div class="ibox-content">
                            <table class="table table-fixed">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($membersig as $member)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $member->profile->nama_penuh }}</td>
                                        <td>{{ $member->profile->tahun }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Jumlah Ahli Mengikut Tahun</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="text-center">
                                <canvas id="tahun-chart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {

        var ctx = $('#tahun-chart');

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [
                    @foreach($tahun as $item)
                        'Tahun {{ $item->tahun }}',
                    @endforeach
                ],
                datasets: [{
                    data: [
                        @foreach($tahun as $item)
                            {{ $item->count }},
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            }
        });

    });
</script>
@endsection
