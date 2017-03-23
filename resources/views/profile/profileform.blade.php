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

                            <form class="form-horizontal" action="{{ action ('ProfileController@update' , $profile->id)}}" method="POST" enctype="multipart/form-data">>

                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}


                                <div class="form-group"><label class="col-sm-2 control-label">Nama Pelajar:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" placeholder="Aktiviti" value="{{ old('name', $profile->user->name) }}"></input>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="email" placeholder="" value="{{ $profile->user->email }}"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">No Matric:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="matric_no" placeholder="" value="{{ $profile->user->matric_no }}"></input>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Gender:</label>
                                    <div class="col-sm-10"></div>&nbsp &nbsp
                                    <label class="radio-inline">
                                      <input type="radio" name="gender" id="inlineRadio1" value="{{ $profile->gender }}"> 1
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gender" id="inlineRadio2" value="{{ $profile->gender }}"> 2
                                    </label>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Course:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="kursus" placeholder="" value="{{ $profile->kursus }}"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">SIG:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="sig" placeholder="" value="{{ $profile->user->sig }}"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">No Tel:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="no_tel" placeholder="" value="{{ $profile->no_tel }}"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Picture:</label>
                                    <div class="col-sm-10"><input type="file" class="form-control" name="picture" placeholder="" value="{{ $profile->picture }}"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Hantar</button>
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
