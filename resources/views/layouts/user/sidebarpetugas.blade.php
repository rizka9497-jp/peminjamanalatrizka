<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/dashboardpetugas" class="brand-link">

        <span class="brand-text font-weight-light">
            PETUGAS ALAT
        </span>

    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2">

            </div>

            <div class="info">

                <a href="#" class="d-block">
                    {{ Auth::user()->nama ?? 'Petugas' }}
                </a>

            </div>

        </div>

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">

                    <a href="/dashboardpetugas" class="nav-link">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="/alat" class="nav-link">

                        <i class="nav-icon fas fa-tools"></i>

                        <p>Alat</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="/peminjaman" class="nav-link">

                        <i class="nav-icon fas fa-handshake"></i>

                        <p>Peminjaman</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="/pengembalian" class="nav-link">

                        <i class="nav-icon fas fa-undo"></i>

                        <p>Pengembalian</p>

                    </a>

                </li>

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