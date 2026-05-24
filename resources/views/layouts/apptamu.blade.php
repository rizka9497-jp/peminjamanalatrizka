<!-- resources/views/layouts/apptamu.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- FONT AWESOME -->

    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- ADMINLTE -->

    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- GOOGLE FONT -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
        }

        .hero-section{
            background: linear-gradient(
                rgba(0,0,0,0.7),
                rgba(0,0,0,0.7)
            ),
            url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070');

            background-size: cover;
            background-position: center;

            min-height: 90vh;

            display: flex;
            align-items: center;
            color: white;
        }

        .hero-title{
            font-size: 55px;
            font-weight: 700;
        }

        .hero-text{
            font-size: 18px;
            color: #ddd;
        }

        .feature-card{
            border-radius: 15px;
            transition: 0.3s;
        }

        .feature-card:hover{
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .section-title{
            font-weight: 700;
        }

        .footer-custom{
            background: #343a40;
            color: white;
            padding: 20px;
        }

    </style>

</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    @include('layouts.tamu.navbar')

    @yield('content')

    @include('layouts.tamu.footer')

</div>

<!-- JQUERY -->

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- BOOTSTRAP -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ADMINLTE -->

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>