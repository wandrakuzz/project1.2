@extends('navi_template.head')

@section('page-title', 'Jawatan')

@section('content')

<div class="col-sm-12">
<div class="container">

  <div class="row">

    <form class="form-horizontal" action="{{ action('KemaskiniController@simpan', $shows)}}" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_kp">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->profile->nama_penuh }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="kp">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option placeholder="Ketua Program" value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_kp" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_tkp">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option placeholder="Timbalan Ketua Program" value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="tkp">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_tkp" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_bendahari">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="bendahari">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_bendahari" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_tbendahari">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="tbendahari">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_tbendahari" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_setiausaha">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->profile->nama_penuh }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="setiausaha">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_setiausaha" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_tsetiausaha">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="tsetiausaha">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_setiausaha" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkprogram">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_program">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_ajkprogram" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkpublisiti">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_publisiti">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatanagan_ajkpublisiti" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkperhubungan">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_perhubungan">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_ajkperhubungan" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkmakanan">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_makanan">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_ajkmakanan" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkprotokol">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_protokol">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_ajkprotokol" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="nama_ajkpengangkutan">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="ajk_pengangkutan">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat )
                <option value="{{ $pangkat ->id }}">{{ $pangkat ->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="kedatangan_ajkpengangkutan" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>




  </div>

</div>

</div>

@endsection
