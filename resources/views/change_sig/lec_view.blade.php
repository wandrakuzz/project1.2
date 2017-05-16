@extends('navi_template.head')

@section('content')

    <div class="col-sm-12">
        <div class="row">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Matrik</th>
                    <th>Alasan</th>
                    <th>Kelab Baru</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tukarans as $tukaran)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tukaran->profile->nama_penuh }}</td>
                    <td>{{ $tukaran->matric_no }}</td>
                    <td>{{ $tukaran->alasan }}</td>
                    <td>{{ $tukaran->kelab_baru }}</td>
                    <td>
                        <form class="form-horizontal" action="{{ action('TukaranController@update', $tukarans[0]->id) }}" method="post">

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}


                            <div class="col-sm-8">
                                <select class="form-control" name="kelab_latest">
                                  <option value="" disabled selected>Please Select</option>
                                 @foreach ($sigs as $sig)
                                    <option value="{{ $sig->id }}">{{ $sig->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-warning" >Terima</button>
                            </div>

                        </form>
                    </td>

                </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection
