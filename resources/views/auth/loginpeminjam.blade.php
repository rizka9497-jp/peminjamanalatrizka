@extends('layouts.apptamu')

@section('title', 'Login Peminjam')

@section('content')

<div class="login-page bg-light">

    <div class="login-box">

        <div class="card shadow">

            <div class="card-header text-center bg-success">

                <h3>

                    Login Peminjam

                </h3>

            </div>

            <div class="card-body">

                <form action="/prosesloginpeminjam"
                      method="POST">

                    @csrf

                    <div class="form-group">

                        <label>
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control">

                    </div>

                    <div class="form-group">

                        <label>
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control">

                    </div>

                    <button type="submit"
                            class="btn btn-success btn-block">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection