@extends('navi_template.head')

@section('page-title', 'Jawatan')

@section('content')

<div class="col-sm-12">
<div class="container">

  <div class="row">

    <form class="form-horizontal" action="{{ action('KemaskiniController@store')}}" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->profile->nama_penuh }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->profile->nama_penuh }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($ahlis as $ahli)
                <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="jawatan_id">
              <option value="" disabled selected>Please Select</option>
              @foreach($pangkats as $pangkat)
                <option value="{{ $pangkat->id }}">{{ $pangkat->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="markah" value=""></input>
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
