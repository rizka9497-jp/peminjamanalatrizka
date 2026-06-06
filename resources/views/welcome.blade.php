<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Alat</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
            scroll-behavior:smooth;
        }

        body{
            background:#f8fafc;
            color:#1e293b;
        }

        /* NAVBAR */

        .navbar{

            background:#2563eb;

            padding:18px 60px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            position:sticky;

            top:0;

            z-index:999;
        }

        .logo{

            color:white;

            font-size:24px;

            font-weight:bold;
        }

        .logo i{

            color:#facc15;
        }

        .menu a{

            color:white;

            text-decoration:none;

            margin-left:25px;

            font-weight:600;
        }

        .login-btn{

            background:#facc15;

            color:#000 !important;

            padding:10px 20px;

            border-radius:10px;
        }

        /* RUNNING TEXT */

        .running{

            background:#facc15;

            overflow:hidden;

            white-space:nowrap;

            padding:12px 0;

            font-weight:bold;
        }

        .running span{

            display:inline-block;

            padding-left:100%;

            animation:marquee 20s linear infinite;
        }

        @keyframes marquee{

            0%{
                transform:translateX(0);
            }

            100%{
                transform:translateX(-100%);
            }
        }

        /* HERO */

        .hero{

            background:
            linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8);

            color:white;

            padding:80px 60px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            gap:40px;
        }

        .hero-text{

            flex:1;
        }

        .hero-text h1{

            font-size:50px;

            margin-bottom:20px;
        }

        .hero-text p{

            font-size:18px;

            line-height:1.7;
        }

        .hero-btn{

            display:inline-block;

            margin-top:25px;

            background:#facc15;

            color:black;

            text-decoration:none;

            padding:14px 30px;

            border-radius:12px;

            font-weight:bold;
        }

        .hero-image{

            flex:1;

            text-align:center;
        }

        .hero-image img{

            width:100%;

            max-width:450px;

            border-radius:20px;

            box-shadow:
            0 10px 30px rgba(0,0,0,.3);
        }

        /* SECTION */

        .section{

            padding:70px 60px;
        }

        .title{

            text-align:center;

            margin-bottom:40px;

            font-size:35px;

            color:#1e293b;
        }

        /* ALAT */

        .alat-grid{

            display:grid;

            grid-template-columns:
            repeat(auto-fit,minmax(280px,1fr));

            gap:25px;
        }

        .alat-card{

            background:white;

            border-radius:15px;

            overflow:hidden;

            box-shadow:
            0 5px 20px rgba(0,0,0,.1);

            transition:.3s;
        }

        .alat-card:hover{

            transform:translateY(-5px);
        }

        .alat-card img{

            width:100%;

            height:220px;

            object-fit:cover;
        }

        .alat-body{

            padding:20px;
        }

        .alat-body h3{

            margin-bottom:10px;
        }

        .status{

            display:inline-block;

            margin-top:10px;

            background:#10b981;

            color:white;

            padding:6px 15px;

            border-radius:20px;

            font-size:13px;
        }

        /* FITUR */

        .fitur-grid{

            display:grid;

            grid-template-columns:
            repeat(auto-fit,minmax(250px,1fr));

            gap:25px;
        }

        .fitur{

            background:white;

            padding:35px;

            text-align:center;

            border-radius:15px;

            box-shadow:
            0 5px 20px rgba(0,0,0,.1);
        }

        .fitur i{

            font-size:40px;

            color:#2563eb;

            margin-bottom:15px;
        }

        /* FOOTER */

        .footer{

            background:#0f172a;

            color:white;

            text-align:center;

            padding:35px;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .navbar{

                padding:15px 20px;
            }

            .menu{

                display:none;
            }

            .hero{

                flex-direction:column;

                text-align:center;

                padding:50px 25px;
            }

            .hero-text h1{

                font-size:35px;
            }

            .section{

                padding:50px 25px;
            }
        }

    </style>

</head>
<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">

        <i class="fas fa-toolbox"></i>

        Sistem Peminjaman Alat

    </div>

    <div class="menu">

        <a href="#alat">Alat</a>

        <a href="#fitur">Fitur</a>

        <a href="/login" class="login-btn">

            Login

        </a>

    </div>

</div>

<!-- RUNNING TEXT -->

<div class="running">

    <span>

        🚀 Selamat Datang di Sistem Peminjaman Alat Rizka Aulia •
        📚 UKK RPL 2025/2026 •
        ⚡ Peminjaman Cepat dan Mudah •
        🔄 Pengembalian Real Time •
        📊 Inventaris Terpantau Dengan Baik •

    </span>

</div>

<!-- HERO -->

<div class="hero">

    <div class="hero-text">

        <h1>

            Kelola Peminjaman Alat
            Dengan Mudah

        </h1>

        <p>

            Sistem digital yang membantu proses
            peminjaman, pengembalian, pengelolaan
            stok, serta pencatatan inventaris alat
            sekolah secara cepat, aman dan teratur.

        </p>

        <a href="/login" class="hero-btn">

            <i class="fas fa-right-to-bracket"></i>

            Mulai Sekarang

        </a>

    </div>

    <div class="hero-image">

        @if($alats->count() && $alats->first()->foto)

            <img src="{{ asset('foto_alat/'.$alats->first()->foto) }}">

        @endif

    </div>

</div>

<!-- DAFTAR ALAT -->

<div class="section" id="alat">

    <h2 class="title">

        Daftar Alat Tersedia

    </h2>

    <div class="alat-grid">

        @forelse($alats as $alat)

        <div class="alat-card">

            @if($alat->foto)

                <img src="{{ asset('foto_alat/'.$alat->foto) }}">

            @endif

            <div class="alat-body">

                <h3>{{ $alat->nama_alat }}</h3>

                <p>
                    Stok : {{ $alat->stok }} Unit
                </p>

                <p>
                    Kondisi :
                    {{ ucfirst($alat->kondisi) }}
                </p>

                <span class="status">

                    {{ ucfirst($alat->status) }}

                </span>

            </div>

        </div>

        @empty

        <div>

            Belum ada data alat.

        </div>

        @endforelse

    </div>

</div>

<!-- FITUR -->

<div class="section" id="fitur">

    <h2 class="title">

        Fitur Utama Sistem

    </h2>

    <div class="fitur-grid">

        <div class="fitur">

            <i class="fas fa-boxes"></i>

            <h3>Manajemen Alat</h3>

            <p>
                Mengelola data alat dan stok inventaris.
            </p>

        </div>

        <div class="fitur">

            <i class="fas fa-handshake"></i>

            <h3>Peminjaman</h3>

            <p>
                Proses peminjaman alat lebih cepat.
            </p>

        </div>

        <div class="fitur">

            <i class="fas fa-file-alt"></i>

            <h3>Laporan</h3>

            <p>
                Laporan peminjaman dan pengembalian otomatis.
            </p>

        </div>

    </div>

</div>

<!-- FOOTER -->

<div class="footer">

    <h3>

        Sistem Peminjaman Alat

    </h3>

    <br>

    <p>

        UKK RPL 2025/2026 - Rizka Aulia

    </p>

    <br>

    <small>

        © {{ date('Y') }} All Rights Reserved

    </small>

</div>

</body>
</html>