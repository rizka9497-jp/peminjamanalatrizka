<!-- resources/views/layouts/tamu/navbar.blade.php -->

<nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">

    <div class="container">

        <a href="/" class="navbar-brand">

            <i class="fas fa-tools mr-2"></i>

            <span class="brand-text font-weight-bold">
                Peminjaman Alat
            </span>

        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarCollapse">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">

                    <a href="/" class="nav-link">
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a href="/tentang" class="nav-link">
                        Tentang
                    </a>

                </li>

                <li class="nav-item">

                    <a href="/daftaralat" class="nav-link">
                        Daftar Alat
                    </a>

                </li>

                <li class="nav-item">

                    <a href="/kontak" class="nav-link">
                        Kontak
                    </a>

                </li>

                <li class="nav-item ml-2">

                    <a href="/login"
                       class="btn btn-warning btn-sm">

                        <i class="fas fa-sign-in-alt"></i>

                        Login

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>