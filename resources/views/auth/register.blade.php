@extends('auth.headlogin')

@section('content')

    <div class="container" style="margin-top:100px;">
<div class="card bg-light" style="width:500px;margin-left:300px;">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Daftar Akaun</h4>
	<p class="text-center">Mulakan penglibatan anda di dalam SIG hari ini</p>
	<form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" value="" class="form-control" placeholder="Nama" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="matric_no" class="form-control" placeholder="No Matrik" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="kelab_id">
            <option value="" disabled selected>Sila Pilih SIG</option>
                @foreach($kelabs as $kelab)
                    <option value="{{ $kelab->id }}">{{ $kelab->name }}</option>
                @endforeach
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input  name="password" class="form-control" placeholder="Katalaluan" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password_confirmation" class="form-control" placeholder="Sahkan Katalaluan" type="password">
    </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
    </div> <!-- form-group// -->
    <p class="text-center">Mempunyai akaun? <a href="{{ route('login') }}">Log Masuk</a> </p>
</form>
</article>
</div> <!-- card.// -->

</div>
<!--container end.//-->

    <div class="login100-more" style="background-color: coral;"></div>


@endsection
