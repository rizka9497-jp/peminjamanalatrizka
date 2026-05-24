<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- LOGO -->
    <a href="/dashboardadmin" class="brand-link">

        <span class="brand-text font-weight-light">
            PEMINJAMAN ALAT
        </span>

    </a>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- USER PANEL -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2"
                     alt="User Image">

            </div>

            <div class="info">

                <a href="#" class="d-block">
                    {{ Auth::user()->nama ?? 'Admin' }}
                </a>

            </div>

        </div>

        <!-- MENU -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- DASHBOARD -->
                <li class="nav-item">

                    <a href="/dashboardadmin" class="nav-link">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <!-- USER -->
                <li class="nav-item">

                    <a href="/user" class="nav-link">

                        <i class="nav-icon fas fa-users"></i>

                        <p>User</p>

                    </a>

                </li>

                <!-- KATEGORI -->
                <li class="nav-item">

                    <a href="/kategori" class="nav-link">

                        <i class="nav-icon fas fa-list"></i>

                        <p>Kategori</p>

                    </a>

                </li>

                <!-- ALAT -->
                <li class="nav-item">

                    <a href="/alat" class="nav-link">

                        <i class="nav-icon fas fa-tools"></i>

                        <p>Alat</p>

                    </a>

                </li>

                <!-- PEMINJAMAN -->
                <li class="nav-item">

                    <a href="/peminjaman" class="nav-link">

                        <i class="nav-icon fas fa-handshake"></i>

                        <p>Peminjaman</p>

                    </a>

                </li>

                <!-- PENGEMBALIAN -->
                <li class="nav-item">

                    <a href="/pengembalian" class="nav-link">

                        <i class="nav-icon fas fa-undo"></i>

                        <p>Pengembalian</p>

                    </a>

                </li>

                <!-- LAPORAN -->
                <li class="nav-item">

                    <a href="/laporanpeminjaman" class="nav-link">

                        <i class="nav-icon fas fa-file"></i>

                        <p>Laporan</p>

                    </a>

                </li>

                <!-- LOG ACTIVITY -->
                <li class="nav-item">

                    <a href="/logactivity" class="nav-link">

                        <i class="nav-icon fas fa-history"></i>

                        <p>Log Activity</p>

                    </a>

                </li>

                <!-- LOGOUT -->
                <li class="nav-item">

                    <a href="/logoutuser" class="nav-link">

                        <i class="nav-icon fas fa-sign-out-alt"></i>

                        <p>Logout</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>