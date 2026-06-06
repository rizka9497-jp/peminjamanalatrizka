```blade
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>

        .brand-link{
            text-align:center;
        }

        .user-panel .info{
            white-space:normal;
        }

        .content-wrapper{
            background:#f4f6f9;
        }

        .main-sidebar{
            box-shadow:4px 0 15px rgba(0,0,0,.1);
        }

        .nav-sidebar .nav-link{
            border-radius:10px;
            margin-bottom:4px;
            transition:.3s;
        }

        .nav-sidebar .nav-link:hover{
            background:#6366f1;
            color:white;
        }

        .nav-sidebar .nav-link.active{
            background:#4f46e5 !important;
            color:white !important;
        }

        .main-header{
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .main-footer{
            text-align:center;
            font-weight:600;
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- NAVBAR -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"
                   data-widget="pushmenu"
                   href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <span class="nav-link">
                    <i class="fas fa-user-circle"></i>
                    {{ auth()->user()->nama }}
                </span>
            </li>

        </ul>

    </nav>

    <!-- SIDEBAR -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link">

            <i class="fas fa-toolbox fa-2x text-warning"></i>

            <span class="brand-text font-weight-bold">
                Peminjaman Alat
            </span>

        </a>

        <div class="sidebar">

            <!-- USER -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="image">

                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->nama }}"
                         class="img-circle elevation-2">

                </div>

                <div class="info">

                    <a href="#" class="d-block">
                        {{ auth()->user()->nama }}
                    </a>

                    <small class="text-warning">
                        {{ strtoupper(auth()->user()->role) }}
                    </small>

                </div>

            </div>

            <!-- MENU -->
            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu">

                    @if(auth()->user()->role == 'admin')

                    <li class="nav-item">
                        <a href="/admin/dashboard"
                           class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/users"
                           class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data User</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/kategori"
                           class="nav-link {{ request()->is('admin/kategori*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>Kategori</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/alats"
                           class="nav-link {{ request()->is('admin/alats*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-toolbox"></i>
                            <p>Data Alat</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/peminjamans"
                           class="nav-link {{ request()->is('admin/peminjamans*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>Peminjaman</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/pengembalian"
                           class="nav-link {{ request()->is('admin/pengembalian*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-rotate-left"></i>
                            <p>Pengembalian</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/laporan"
                           class="nav-link {{ request()->is('admin/laporan*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-pdf"></i>
                            <p>Laporan</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/log-activity"
                           class="nav-link {{ request()->is('admin/log-activity*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-clock-rotate-left"></i>
                            <p>Log Activity</p>
                        </a>
                    </li>

                    @elseif(auth()->user()->role == 'petugas')

                    <li class="nav-item">
                        <a href="/petugas/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/petugas/peminjaman" class="nav-link">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>Peminjaman</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/petugas/pengembalian" class="nav-link">
                            <i class="nav-icon fas fa-rotate-left"></i>
                            <p>Pengembalian</p>
                        </a>
                    </li>

                    @elseif(auth()->user()->role == 'peminjam')

                    <li class="nav-item">
                        <a href="/peminjam/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/peminjam/alat" class="nav-link">
                            <i class="nav-icon fas fa-toolbox"></i>
                            <p>Daftar Alat</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/peminjam/peminjaman" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding"></i>
                            <p>Peminjaman Saya</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/peminjam/riwayat" class="nav-link">
                            <i class="nav-icon fas fa-clock"></i>
                            <p>Riwayat Saya</p>
                        </a>
                    </li>

                    @endif

                    <li class="nav-item mt-3">

                        <a href="/logout"
                           class="nav-link bg-danger">

                            <i class="nav-icon fas fa-right-from-bracket"></i>

                            <p>Logout</p>

                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </aside>

    <!-- CONTENT -->
    <div class="content-wrapper">

        <section class="content pt-3">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    <!-- FOOTER -->
    <footer class="main-footer">

        <strong>
            Sistem Peminjaman Alat Sekolah
        </strong>

    </footer>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
```
