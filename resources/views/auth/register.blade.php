<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="validate-form" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-4 control-label">Name</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('matric_no') ? ' has-error' : '' }}">
                  <label for="matric_no" class="col-md-4 control-label">Matric Number</label>

                  <div class="col-md-6">
                      <input id="matric_no" type="text" class="form-control" name="matric_no" value="{{ old('matric_no') }}" required >

                      @if ($errors->has('matric_no'))
                          <span class="help-block">
                              <strong>{{ $errors->first('matric_no') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('kelab_id') ? ' has-error' : '' }}">
                  <label for="kelab_id" class="col-md-4 control-label">SIG</label>

                  <div class="col-md-6">
                    <select class="form-control" name="kelab_id">
                      <option value="" disabled selected>Please Select</option>
                      @foreach($kelabs as $kelab)
                        <option value="{{ $kelab->id }}">{{ $kelab->name }}</option>
                      @endforeach
                    </select>

                      @if ($errors->has('kelab_id'))
                          <span class="help-block">
                              <strong>{{ $errors->first('kelab_id') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">Password</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>
              </div>
      </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">
                Register
            </button>
          </div>
      </form>
    </div>
  </div>
</div>
