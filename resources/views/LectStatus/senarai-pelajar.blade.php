@extends('navi_template.head')

@section('content')

<div class="col-sm-12">
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Senarai Pelajar</div>
  <div class="panel-body">
    <p>Senarai pelajar yang berdaftar di bawah Special Interest Group (SIG)</p>
  </div>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Matrik</th>
        <th>Email</th>
        <th>Jantina</th>
        <th>Kursus</th>
        <th>Tahun</th>
        <th>No Telefon</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      @foreach ($senarais as $senarai)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $senarai->profile->nama_penuh}}</td>
        <td>{{ $senarai->matric_no }}</td>
        <td>{{ $senarai->email }}</td>
        <td>{{ $senarai->profile->gender}}</td>
        <td>{{ $senarai->profile->kursus}}</td>
        <td>{{ $senarai->profile->tahun}}</td>
        <td>{{ $senarai->profile->no_tel}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>

@endsection
