<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte-3.0.4/plugins/fontawesome-free/css/all.min.css') }}">
{{--    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">--}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte-3.0.4/dist/css/adminlte.min.css') }}">
{{--    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">--}}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @stack('head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard.index') }}" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
{{--        <form class="form-inline ml-3">--}}
{{--            <div class="input-group input-group-sm">--}}
{{--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-navbar" type="submit">--}}
{{--                        <i class="fas fa-search"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">--}}
{{--                    <i class="fas fa-th-large"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout.get') }}">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('dashboard.index') }}" class="brand-link">
{{--            <img src="{{ asset('images/logo-light.png') }}"--}}
{{--                 alt="AdminLTE Logo"--}}
{{--                 class="brand-image">--}}
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ auth()->user()->avatar }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-header">Menu</li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link">
                            <i class="nav-icon far fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.user.index') }}" class="nav-link">
                            <i class="nav-icon far fas fa-users"></i>
                            <p>
                                Profile Pegawai
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.attendance.index')}}" class="nav-link">
                            <i class="nav-icon far fas fa-clock"></i>
                            <p>
                                Data Absensi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.leave.index') }}" class="nav-link">
                            <i class="nav-icon far fas fa-calendar-alt"></i>
                            <p>
                                Data Cuti
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.personal-qualification.index') }}" class="nav-link">
                            <i class="nav-icon far fas fa-certificate"></i>
                            <p>
                                Kualifikasi Personal
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fas fa-running"></i>
                            <p>
                                Penunjukan inspektor
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fas fa-user-ninja"></i>
                            <p>
                                Jasa Inspeksi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.information.index') }}" class="nav-link">
                            <i class="nav-icon fas fas fa-newspaper"></i>
                            <p>
                                Informasi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.master-position.index') }}" class="nav-link">
                            <i class="nav-icon fas fas fa-newspaper"></i>
                            <p>
                                Master Jabatan
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        {{-- Notification --}}
        @include('vendor.notification')

        <!-- Main content -->
        <section class="content" id="app">
        @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.4
        </div>
        <strong>Copyright &copy; 2020 {{ config('app.name') }}.</strong> All rights
        reserved.
    </footer>

{{--    <!-- Control Sidebar -->--}}
{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <!-- Control sidebar content goes here -->--}}
{{--    </aside>--}}
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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

@stack('javascript')
</body>
</html>