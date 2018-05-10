 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('images/img/favicon.ico') }}"/>

        <title>{{ config('app.name', 'Laman Pelajar') }}</title>

        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/jquery.timepicker.min.css') }}">
        @yield('dashboard-style')

        <style type="text/css">
        .img-circle-profile {
            border-radius: 50%;
            border: 1px solid black;
            background-position: center center;
            background-repeat: no-repeat;
            object-fit: cover;
            width: 40%;
            height: 40%;
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
                            <img alt="image" class="img-circle-profile" src="{{ Auth::user()->profile->picture }}" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span>

                                <span class="text-muted text-xs block">Menu<b class="caret"></b></span>

                                 </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
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
                        <a href="{{ url('/berita') }}"><i class="fa fa-bank"></i> <span class="nav-label">Dashboard</span></a>
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
                                <img alt="image" class="img-circle-profile" src="{{ Auth::user()->profile->picture }}" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span> <span class="text-muted text-xs block">Test<b class="caret"></b></span> </span> </a>
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
                            <a href="{{ url('/berita') }}"><i class="fa fa-bank"></i> <span class="nav-label">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/semak') }}"><i class="fa fa-bank"></i> <span class="nav-label">Semak Cadangan</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/semak-pembuktian') }}"><i class="fa fa-bank"></i> <span class="nav-label">Semak Pembuktian</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/tukar-pengesahan') }}"><i class="fa fa-flask"></i> <span class="nav-label">Permohonan Pertukaran SIG</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/senarai-pelajar') }}"><i class="fa fa-group"></i> <span class="nav-label">Senarai Ahli</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/profile') }}"><i class="fa fa-group"></i> <span class="nav-label">Kemaskini Maklumat Diri</span></a>
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
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Keluar
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

            </nav>
            </div>

            <!-- End Header -->

            <div class="row">
              <div class="col-lg-12">
                  <div class="wrapper wrapper-content">
                      @yield('content')
                  </div>

                  {{-- <div class="ibox float-e-margins">
                      <div class="ibox-title">
                          <h5>@yield('page-title')</h5>
                      </div>
                      <div class="ibox-content">
                          <div class="row">
                                @yield('content')
                          </div>
                      </div>
                  </div> --}}
              </div>

            </div>

            <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
            <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('bootstrap/js/inspinia.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.metisMenu.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.slimscroll.min.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery-ui.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.timepicker.min.js') }}"></script>
            <script src="{{ asset('bootstrap/js/Chart.min.js') }}" ></script>
            <script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('bootstrap/js/jquery.dataTables.bootstrap.min.js') }}"></script>
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
