<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hani Exspress</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet">

    <link href="{{ asset('css/soft-ui-dashboard.min.css') }}" rel="stylesheet">

</head>

<style>
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
    .custom {
        max-width: 150px !important;
    }
</style>

<body class="g-sidenav-show bg-gray-100">
<div id="app">
    {{-- navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3 --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3 ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                Hani Exspress
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        @can('user-list')
                            <li><a class="nav-link" href="{{ route('users.index') }}">Kelola Akun</a></li>
                        @endcan

                        @can('role-list')
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Kelola Akses</a></li>
                        @endcan
                        @can('transaction-list')
                            <li><a class="nav-link" href="{{ route('transaction.index') }}">Kelola Transaksi</a></li>
                        @endcan
                        @can('print-list')
                            <li><a class="nav-link" href="{{ route('print.index') }}">Cetak</a></li>
                        @endcan
                        @can('report-list')
                            <li><a class="nav-link" href="{{ route('report.index') }}">Laporan</a></li>
                        @endcan

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar Light -->
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Soft UI Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
            <div class="row">
                <div class="col-auto m-auto">
                <a class="cursor-pointer">
                    <i class="fa fa-cog fixed-plugin-button-nav"></i>
                </a>
                </div>
                <div class="col-auto m-auto">
                <div class="dropdown">
                    <a class="cursor-pointer" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                    ...
                    </ul>
                </div>
                </div>
                <div class="col-auto">
                <div class="bg-white border-radius-lg d-flex me-2">
                    <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
                    <button class="btn bg-gradient-primary my-1 me-1">Search</button>
                </div>
                </div>
            </div>
            </ul>
        </div>
    </div>
</nav> --}}
<!-- End Navbar -->

<br>

    <main class="py-1">
        <div class="container-xxl">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
