@extends('layouts.app')

@section('content')
div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <!-- <img alt="image" class="img-circle" src="img/1.jpg" /> -->
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Mohamad Azwan bin Halim</strong>
                        </span> <span class="text-muted text-xs block">SEIS <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="index.html">Keluar</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li>
                <a href="{{ url('/home') }}">"><i class="fa fa-bank"></i> <span class="nav-label">Berita SIG</span></a>
            </li>
            <li>
                <a href="{{ url('/suggest') }}">"><i class="fa fa-pencil"></i> <span class="nav-label">Cadangan Aktiviti</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Keputusan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="graph_flot.html">Semester 1 sesi 2014/2015</a></li>
                    <li><a href="graph_morris.html">Semester 2 sesi 2014/2015</a></li>
                    <li><a href="graph_rickshaw.html">Semester 1 sesi 2015/2016</a></li>
                    <li><a href="graph_chartjs.html">Semester 2 sesi 2015/2016</a></li>
                    <li><a href="graph_chartist.html">Semester 1 sesi 2016/2017</a></li>
                    <li><a href="c3.html">Semester 1 sesi 2016/2017</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/verify') }}"><i class="fa fa-cloud-upload"></i> <span class="nav-label">Pembuktian Aktiviti</span>  </a>
            </li>
            <li>
                <a href="projek.html"><i class="fa fa-flask"></i> <span class="nav-label">Kemaskini Aktiviti</span></a>
            </li>
            <li>
                <a href="pertukaranSIG.html"><i class="fa fa-flask"></i> <span class="nav-label">Permohonan Pertukaran SIG</span></a>
            </li>
            <li>
                <a href="{{ url('/profile') }}"><i class="fa fa-group"></i> <span class="nav-label">Kemaskini Maklumat Diri</span></a>
            </li>
            <li>
                <a href="maklumat.html"><i class="fa fa-edit"></i> <span class="nav-label">Maklumat Tentang SIG</span></a>
            </li>
        </ul>
    </div>
</nav>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
