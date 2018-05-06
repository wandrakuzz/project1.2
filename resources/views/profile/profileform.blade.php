@extends('navi_template.head')

@section('content')
<div class="row">
    <div class="col-lg-12">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{ action ('ProfileController@update' , $user->id) }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}

                              <div class="panel panel-default" style="border-bottom: 0px; box-shadow: none;">
                                <div class="panel-heading">Profile Picture</div>
                                <div class="panel-body text-center">
                                  <input type="file" name="picture" id="fileUpload" class="hide">
                                  <label for="fileUpload">
                                      <img class="image-placeholder img-circle-profile" src="{{ $user->profile->picture }}" style="width: 200px; height: 200px"/>
                                    </label>
                                    <div class="form-group"><label class="col-sm-2 control-label">Nama :</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name" placeholder="Aktiviti" value="{{ old('name', $user->name) }}"></input>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Nama Penuh :</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="nama_penuh" placeholder="Nama Penuh" value="{{ old('nama_penuh', $user->profile->nama_penuh) }}"></input>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="email" placeholder="" value="{{ $user->email }}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Nombor Matrik:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="matric_no" placeholder="" value="{{ $user->matric_no }}"></input>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Jantina:</label>
                                        <div class="col-sm-10"></div>&nbsp &nbsp
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio1" value="Lelaki" @if($user->profile->gender =="Lelaki") checked @endif> Lelaki
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio2" value="Perempuan" @if($user->profile->gender =="Perempuan") checked @endif> Perempuan
                                        </label>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Kursus :</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="kursus">
                                                <option disabled selected>Sila Pilih</option>
                                                @foreach ($courses as $kursus)
                                                    <option value="{{ $kursus->id }}"{{ ($user->profile->kursus_id == $kursus->id) ? 'selected' : '' }}>{{ $kursus->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Tahun:</label>
                                        <div class="col-sm-10"></div>&nbsp &nbsp
                                        <label class="radio-inline">
                                          <input type="radio" name="tahun" id="inlineRadio1" value="1" @if($user->profile->tahun =="1") checked @endif> 1
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="tahun" id="inlineRadio2" value="2" @if($user->profile->tahun =="2") checked @endif> 2
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="tahun" id="inlineRadio3" value="3" @if($user->profile->tahun =="3") checked @endif> 3
                                        </label>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SIG:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="sig" placeholder="" value="{{ $user->kelab->name }}" disabled></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No Tel:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="no_tel" placeholder="No Telefon" value="{{ $user->profile->no_tel }}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Hantar</button>
                                        </div>
                                    </div>

                                  </div>

                                </div>


                            </form>

                        </div>
                    </div>
                    <!-- End of first tab -->

                  </div>
              </div>




@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {

$("#fileUpload").change(function(){
updatePlacholder(this);
});

// file upload
function updatePlacholder(input) {
if (input.files && input.files) {
var reader = new FileReader();

reader.onload = function (e) {
  $('.image-placeholder').attr('src', e.target.result);
}

reader.readAsDataURL(input.files);
}
}
})
</script>
@endsection
