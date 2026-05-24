<aside class="main-sidebar sidebar-dark-success elevation-4">

    <a href="/dashboardpeminjam" class="brand-link">

        <span class="brand-text font-weight-light">
            ZONA PEMINJAM
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
                    {{ Auth::guard('peminjam')->user()->nama ?? 'Peminjam' }}
                </a>

            </div>

        </div>

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">

                    <a href="/dashboardpeminjam" class="nav-link">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="/peminjamansaya" class="nav-link">

                        <i class="nav-icon fas fa-handshake"></i>

                        <p>Peminjaman Saya</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="/logoutpeminjam" class="nav-link">

                        <i class="nav-icon fas fa-sign-out-alt"></i>

                        <p>Logout</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>