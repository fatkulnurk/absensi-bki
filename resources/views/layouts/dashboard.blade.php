<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte-3.0.4/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <style>
        .navbar {
            background-color: #003567;
        }
    </style>

    @stack('head')
</head>
<body>

<div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ auth()->user()->avatar }}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('logout.get') }}" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('dashboard.index') }}">{{ config('app.name') }}</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ route('dashboard.index') }}">AB</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Menu</li>
                <li><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="far fas fa-home"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link" href="{{ route('dashboard.user.index') }}"><i class="far fas fa-users"></i> <span>Profile Pegawai</span></a></li>
                <li><a class="nav-link" href="{{ route('dashboard.attendance.index') }}"><i class="far fas fa-clock"></i> <span>Data Absensi</span></a></li>
                <li><a class="nav-link" href="{{ route('dashboard.leave.index') }}"><i class="far fas fa-calendar-alt"></i> <span>Data Cuti</span></a></li>
                <li><a class="nav-link" href="{{ route('dashboard.personal-qualification.index') }}"><i class="far fas fa-certificate"></i> <span>Kualifikasi Personal</span></a></li>
{{--                <li><a class="nav-link" href="#"><i class="far fas fa-running"></i> <span>Penunjukan Inspektor</span></a></li>--}}
                <li><a class="nav-link" href="{{ route('dashboard.inspection.index') }}"><i class="far fas fa-user-ninja"></i> <span>Jasa Inspeksi</span></a></li>
                <li><a class="nav-link" href="{{ route('dashboard.information.index') }}"><i class="far fas fa-newspaper"></i> <span>Informasi</span></a></li>

                <li class="menu-header">Data Master</li>
                <li><a class="nav-link" href="{{ route('dashboard.master-position.index') }}"><i class="far fas fa-newspaper"></i> <span>Master Jabatan</span></a></li>
            </ul>
        </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>

            <div class="section-body" id="app">
                @include('vendor.notification')

                @yield('content')
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; {{ \Illuminate\Support\Carbon::now()->year }}
        </div>
        <div class="footer-right">
            {{ config('app.name') }}
        </div>
    </footer>
</div>


<!-- Site wrapper -->
{{--<div class="wrapper">--}}
{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        --}}{{-- Notification --}}
{{--        @include('vendor.notification')--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content" id="app">--}}
{{--        @yield('content')--}}
{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}

{{--    <footer class="main-footer">--}}
{{--        <div class="float-right d-none d-sm-block">--}}
{{--            <b>Version</b> 3.0.4--}}
{{--        </div>--}}
{{--        <strong>Copyright &copy; 2020 {{ config('app.name') }}.</strong> All rights--}}
{{--        reserved.--}}
{{--    </footer>--}}


<script src="{{ asset('js/app.js') }}"></script>

<!-- jQuery -->
{{--<script src="../../plugins/jquery/jquery.min.js"></script>--}}
{{--<script src="{{ asset('adminlte-3.0.2/plugins/jquery/jquery.min.js') }}"></script>--}}
<!-- Bootstrap 4 -->
{{--<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ asset('adminlte-3.0.4/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
{{--<script src="../../dist/js/adminlte.min.js"></script>--}}
<script src="{{ asset('adminlte-3.0.4/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="../../dist/js/demo.js"></script>--}}
<script src="{{ asset('adminlte-3.0.4/dist/js/demo.js') }}"></script>


{{-- stisla--}}

<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@stack('javascript')
</body>
</html>
