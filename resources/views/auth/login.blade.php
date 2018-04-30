@extends('auth.headlogin')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
    <form class="login100-form validate-form" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="" style="padding-bottom:100px;text-align:center;">
              <h1>Selamat Datang ke Sistem Maklumat SIG</h1>
          </div>
        <span class="login100-form-title p-b-34">
            Log Masuk Akaun
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Sila isi Matric No">
            <input id="first-name" class="input100" type="text" name="matric_no" value="{{ old('matric_no') }}" placeholder="Matric No">
            @if ($errors->has('matric_no'))
                <span class="help-block">
                    <strong>{{ $errors->first('matric_no') }}</strong>
                </span>
            @endif
            <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Sila isi katalaluan">
            <input class="input100" type="password" name="password" placeholder="Katalaluan">
            @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            <span class="focus-input100"></span>
        </div>


            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    Masuk
                </button>
            </div>


        <div class="w-full text-center p-t-27 p-b-239" style="padding-bottom:100px;">
            <span class="txt1">
                Lupa
            </span>

            <a href="#" class="txt2">
                Email / Katalaluan?
            </a>
        </div>

        <div class="w-full text-center">
            <span class="txt1">
                Tiada akaun?
            </span>
            <br>
            <a href="{{ route('register') }}" type="button" class="btn btn-outline-dark">
                Daftar Disini
            </a>
        </div>
        </form>
        <div class="login100-more" style="background-image: url('images/img/sig5-min.jpg');"></div>
    </div>
</div>
</div>



@endsection
