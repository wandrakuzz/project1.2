@extends('navi_template.head')

@section('content')
<div class="row">
    <div class="col-sm-12">

        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
                <canvas id="tahun-chart" width="150" height="150"></canvas>
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
            type: 'doughnut',
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
