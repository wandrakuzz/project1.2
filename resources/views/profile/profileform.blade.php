@extends('navi_template.head')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Profile Registration</a></li>
                </ul>
                <div class="tab-content">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action ('ProfileController@update' , $user[0]->id) }}" method="POST" enctype="multipart/form-data">

                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}


                              <div class="panel panel-default" style="border-bottom: 0px; box-shadow: none;">
                                <div class="panel-heading">Profile Picture</div>
                                <div class="panel-body text-center">
                                  <input type="file" name="picture" id="fileUpload" class="hide">
                                  <label for="fileUpload">
                                      <img class="image-placeholder img-circle-profile" src="{{ $user[0]->profile->picture }}" style="width: 200px; height: 200px"/>
                                    </label>
                                    <div class="form-group"><label class="col-sm-2 control-label">Nama Pelajar:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name" placeholder="Aktiviti" value="{{ old('name', $user[0]->name) }}"></input>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="email" placeholder="" value="{{ $user[0]->email }}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No Matric:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="matric_no" placeholder="" value="{{ $user[0]->matric_no }}"></input>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Gender:</label>
                                        <div class="col-sm-10"></div>&nbsp &nbsp
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio1" value="Lelaki" @if($user[0]->profile->gender =="Lelaki") checked @endif> Lelaki
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" id="inlineRadio2" value="Perempuan" @if($user[0]->profile->gender =="Perempuan") checked @endif> Perempuan
                                        </label>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Course:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="kursus" placeholder="" value="{{ $user[0]->profile->kursus }}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SIG:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="sig" placeholder="" value="{{ $user[0]->kelab->name }}" disabled></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No Tel:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="no_tel" placeholder="" value="{{ $user[0]->profile->no_tel }}"></div>
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
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
  $('.image-placeholder').attr('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
}
})
</script>
@endsection
