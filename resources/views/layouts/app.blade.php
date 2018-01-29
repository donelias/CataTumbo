<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css')}}"/>


    <!-- EOF CSS INCLUDE -->
</head>
<body>
    {{--
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    --}}
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        @include('layouts.partials.sidebar')

        <!-- START X-NAVIGATION VERTICAL -->
        @include('layouts.partials.navegationVertical')

        <!-- START CONTENT -->
        <!-- /top navigation -->

        @yield('content')
        <!-- END CONTENT -->

    </div>
    <!-- START SCRIPTS -->

    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src="{{ asset('js/plugins/icheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/plugins/morris/raphael-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/morris/morris.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/rickshaw/d3.v3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/rickshaw/rickshaw.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type='text/javascript' src="{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/owl/owl.carousel.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/plugins/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="{{ asset('js/settings.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/actions.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/demo_dashboard.js')}}"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/dropdowns.js')}}"></script>
    <script type="text/javascript">
        $('select').select2({
            allowClear: true,
            placeholder: {
                id: "",
                text: 'Select value'
            }
        });

    </script>
</body>
</html>
