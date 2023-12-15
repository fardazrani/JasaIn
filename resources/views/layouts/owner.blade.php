<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JasaIn | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href={{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('dist/css/adminlte.min.css') }}>
    <link rel="stylesheet" href={{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/style.css">
    @livewireStyles()
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault(); this.closest('form').submit();"><span
                                class="fa fa-sign-out-alt me-2"></span>{{ __('Keluar') }}
                        </a>
                    </form>
                    {{-- <x-dropdown-link :href="route('profile')" class="btn btn-sm btn-info">
                 {{ __('Profile') }}
        </x-dropdown-link> --}}
                    {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')" class="btn btn-sm btn-danger"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('LogOut') }}
            </x-dropdown-link>
        </form> --}}
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('welcome') }}" class="brand-link text-decoration-none ">
                <span class="brand-text h3">JasaIn</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="{{ route('profile.show') }}" class="d-block text-decoration-none"><i
                                class="me-2 fa fa-user-circle"></i>{{ Auth::user()->name }}</a>
                        {{-- profile --}}
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-header">Data Admin</li>
                        <li class="nav-item @yield('menuCreate')">
                            <a href="{{ route('create') }}" class="nav-link">
                                <i class="nav-icon fa fa-plus"></i>
                                <p>
                                    Tambah Layanan Jasa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @yield('menuEdit')">
                            <a href="{{ route('view') }}" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    Edit Post
                                </p>
                            </a>
                        </li>

                        <li class="nav-item @yield('menuData')">
                            <a href="{{ route('data') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar-alt"></i>
                                <p>
                                    Data Penjualan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @yield('menuOrder')">
                            <a href="{{ route('order', Auth::user()->id) }}" class="nav-link">
                                <i class="nav-icon fa fa-cart-arrow-down"></i>
                                <p>
                                    Pesanan
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <div class="row">

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h5>{{$jumlah_posts}}</h5>
                                    <p>Pesanan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer"><i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h5>@currency($pendapatan)</h5>
                                    <p>Pendapatan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-cash"></i>
                                </div>
                                <a href="#" class="small-box-footer"><i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                    </div>

                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body">

                                    {{ $slot }}
                                </div>

                            </div>

                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://www.instagram.com/ghulammuzz/">Ghulam Muzafar</a>.</strong>
            Universitas Negeri Malang
            <div class="float-right d-none d-sm-inline-block">
                <b>Alpha</b> 2.7
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- jQuery -->
    <script src={{ asset('plugins/jquery/jquery.min.js') }}></script>
    <script src={{ asset('plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <script type="text/javascript">
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <script src={{ asset('dist/js/adminlte.js') }}></script>
    <script src={{ asset('dist/js/pages/dashboard.js') }}></script>
    <script src={{ asset('dist/js/demo.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#tabelowner').DataTable();
        } );
    </script>

    @livewireScripts()
</body>

</html>
{{-- <!-- Page Heading -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
    </div>
</header>

<!-- Page Content -->
<main>
    {{ $slot }}
</main> --}}
