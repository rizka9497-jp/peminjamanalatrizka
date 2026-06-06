<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Sistem Peminjaman Alat</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(
        rgba(0,0,0,.70),
        rgba(0,0,0,.70)
    ),
    url('{{ asset("images/bg-alat.jpg") }}');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    overflow:hidden;
}

/* Floating Shapes */

.circle{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(5px);
    animation:float 8s infinite ease-in-out;
}

.circle1{
    width:220px;
    height:220px;
    top:10%;
    left:10%;
}

.circle2{
    width:150px;
    height:150px;
    bottom:10%;
    right:10%;
}

@keyframes float{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-25px);
    }
}

.container{

    width:100%;
    max-width:1000px;

    display:flex;
    align-items:center;
    justify-content:center;

    gap:40px;

    padding:20px;
}

.left-panel{

    flex:1;

    color:white;
}

.left-panel h1{

    font-size:48px;
    margin-bottom:15px;
}

.left-panel p{

    font-size:18px;
    opacity:.9;
    line-height:1.8;
}

.feature{

    margin-top:25px;
}

.feature div{

    margin-bottom:15px;
    font-size:16px;
}

.feature i{

    color:#ffd93d;
    margin-right:10px;
}

.card{

    width:420px;

    background:rgba(255,255,255,.12);

    backdrop-filter:blur(18px);

    border:1px solid rgba(255,255,255,.2);

    border-radius:30px;

    padding:40px;

    box-shadow:
    0 20px 40px rgba(0,0,0,.35);
}

.logo{

    text-align:center;
    margin-bottom:30px;
}

.logo i{

    font-size:70px;

    color:#ffd93d;

    margin-bottom:10px;
}

.logo h2{

    color:white;
    font-size:30px;
}

.logo p{

    color:#ddd;
    font-size:14px;
}

.error{

    background:#ffdddd;

    color:#c62828;

    padding:12px;

    border-radius:10px;

    margin-bottom:20px;
}

.form-group{

    margin-bottom:20px;
}

.form-group label{

    color:white;

    display:block;

    margin-bottom:8px;

    font-weight:600;
}

.input-box{

    position:relative;
}

.input-box input{

    width:100%;

    padding:14px 45px 14px 15px;

    border:none;

    border-radius:15px;

    background:rgba(255,255,255,.15);

    color:white;

    outline:none;
}

.input-box input::placeholder{

    color:#ddd;
}

.icon{

    position:absolute;

    right:15px;

    top:15px;

    color:#fff;
}

.toggle-pass{

    cursor:pointer;
}

.btn-login{

    width:100%;

    border:none;

    padding:15px;

    border-radius:15px;

    background:
    linear-gradient(
    45deg,
    #ffb703,
    #fb8500);

    color:white;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:.3s;
}

.btn-login:hover{

    transform:translateY(-3px);

    box-shadow:
    0 15px 25px rgba(251,133,0,.5);
}

.footer{

    margin-top:20px;

    text-align:center;

    color:#ddd;

    font-size:13px;
}

@media(max-width:900px){

    .container{

        flex-direction:column;
    }

    .left-panel{

        display:none;
    }

    .card{

        width:100%;
        max-width:420px;
    }
}

</style>

</head>

<body>

<div class="circle circle1"></div>
<div class="circle circle2"></div>

<div class="container">

    <div class="left-panel">

        <h1>Sistem Peminjaman Alat</h1>

        <p>
            Kelola peminjaman dan pengembalian alat
            secara cepat, mudah, dan terintegrasi.
        </p>

        <div class="feature">

            <div>
                <i class="fas fa-check-circle"></i>
                Manajemen Data Alat
            </div>

            <div>
                <i class="fas fa-check-circle"></i>
                Peminjaman Online
            </div>

            <div>
                <i class="fas fa-check-circle"></i>
                Pengembalian & Denda
            </div>

            <div>
                <i class="fas fa-check-circle"></i>
                Laporan Otomatis
            </div>

        </div>

    </div>

    <div class="card">

        <div class="logo">

            <i class="fas fa-toolbox"></i>

            <h2>Login</h2>

            <p>Masuk ke Sistem Peminjaman Alat</p>

        </div>

        @if(session('error'))

        <div class="error">

            {{ session('error') }}

        </div>

        @endif

        <form action="/login" method="POST">

            @csrf

            <div class="form-group">

                <label>Username</label>

                <div class="input-box">

                    <input type="text"
                           name="username"
                           placeholder="Masukkan Username"
                           required>

                    <i class="fas fa-user icon"></i>

                </div>

            </div>

            <div class="form-group">

                <label>Password</label>

                <div class="input-box">

                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Masukkan Password"
                           required>

                    <i class="fas fa-eye icon toggle-pass"
                       onclick="togglePassword()"></i>

                </div>

            </div>

            <button class="btn-login">

                <i class="fas fa-sign-in-alt"></i>

                Login Sekarang

            </button>

        </form>

        <div class="footer">

            © 2026 Sistem Peminjaman Alat Rizka Aulia

        </div>

    </div>

</div>

<script>

function togglePassword(){

    let password =
    document.getElementById('password');

    let icon =
    document.querySelector('.toggle-pass');

    if(password.type === "password"){

        password.type = "text";

        icon.classList.remove('fa-eye');

        icon.classList.add('fa-eye-slash');

    }else{

        password.type = "password";

        icon.classList.remove('fa-eye-slash');

        icon.classList.add('fa-eye');
    }
}

</script>

</body>
</html>