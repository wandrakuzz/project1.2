 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name', 'Laman Pelajar') }}</title>

        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">


        <style type="text/css">
        .img-circle-profile {
            border-radius: 50%;
            border: 1px solid black;
            background-position: center center;
            background-repeat: no-repeat;
            object-fit: cover;
        }
    </style>



    </head>
    <body>
      <!-- Start Navigation Bar -->
        <div id="wrapper">
        @if(\Auth::user()->user_group == 'pelajar')
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{ asset('bootstrap/img/1.jpg') }}" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span> <span class="text-muted text-xs block">SEIS <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}">Keluar</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <li>
                        <a href="{{ url('/berita') }}"><i class="fa fa-bank"></i> <span class="nav-label">Berita SIG</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/suggest') }}"><i class="fa fa-pencil"></i> <span class="nav-label">Cadangan Aktiviti</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/kemaskini')}}"><i class="fa fa-flask"></i> <span class="nav-label">Kemaskini Aktiviti</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/verify') }}"><i class="fa fa-cloud-upload"></i> <span class="nav-label">Pembuktian Aktiviti</span>  </a>
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
                        <a href="{{ url('/tukar') }}"><i class="fa fa-flask"></i> <span class="nav-label">Permohonan Pertukaran SIG</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/profile') }}"><i class="fa fa-group"></i> <span class="nav-label">Kemaskini Maklumat Diri</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        @else
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/1.jpg" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span> <span class="text-muted text-xs block">SEIS <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}">Keluar</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                        <li>
                            <a href="{{ url('/berita') }}"><i class="fa fa-bank"></i> <span class="nav-label">Berita SIG</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-send-o"></i> <span class="nav-label">Aktiviti</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{ url('/semak') }}">Semak Cadangan</a></li>
                                <li><a href="{{ url('/semak-pembuktian') }}">Semak Pembuktian</a></li>
                            </ul>
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
                            <a href="pemarkahan.html"><i class="fa fa-flask"></i> <span class="nav-label">Pemarkahan Pelajar</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/tukar-pengesahan') }}"><i class="fa fa-flask"></i> <span class="nav-label">Permohonan Pertukaran SIG</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/senarai-pelajar') }}"><i class="fa fa-group"></i> <span class="nav-label">Senarai Ahli</span></a>
                        </li>
                </ul>
            </div>
        </nav>
        @endif
        <!-- End Navigation Bar -->


        <!-- Start Header  -->
            <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Selamat Datang ke Sistem Maklumat Pelajar SIG.</span>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Keluar
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>

            </nav>
            </div>

            <!-- End Header -->

            <div class="row">





              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">
                          <h5>@yield('page-title')</h5>

                      </div>
                      <div class="ibox-content">
                          <div class="row">

                                @yield('content')
                          </div>
                      </div>
                  </div>
              </div>

            </div>

            <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
            <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('bootstrap/js/inspinia.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.metisMenu.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.slimscroll.min.js') }}"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
            <script src="{{ asset('bootstrap/js/Chart.min.js') }}" ></script>
            <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
            <script>
              $(function () {

                $('.datepicker').datepicker({
                  dateFormat: "yy-mm-dd"
                });

                $('.timepicker').timepicker({
                  timeFormat: 'hh:mm:ss',
                });



              });
            </script>

            @yield('scripts')


    </body>
</html>
