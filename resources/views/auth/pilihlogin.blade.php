@extends('layouts.apptamu')

@section('title', 'Pilih Login')

@section('content')

<div class="content-wrapper">

    <div class="content">

        <div class="container pt-5">

            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card shadow border-0">

                        <div class="card-header bg-primary text-center">

                            <h3>

                                Pilih Login

                            </h3>

                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <div class="card shadow-sm">

                                        <div class="card-body text-center">

                                            <i class="fas fa-user-shield
                                                      fa-4x text-primary mb-3"></i>

                                            <h4>

                                                Admin / Petugas

                                            </h4>

                                            <p>

                                                Login untuk mengelola sistem.

                                            </p>

                                            <a href="/loginuser"
                                               class="btn btn-primary btn-block">

                                                Login User

                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <div class="card shadow-sm">

                                        <div class="card-body text-center">

                                            <i class="fas fa-user
                                                      fa-4x text-success mb-3"></i>

                                            <h4>

                                                Peminjam

                                            </h4>

                                            <p>

                                                Login untuk meminjam alat.

                                            </p>

                                            <a href="/loginpeminjam"
                                               class="btn btn-success btn-block">

                                                Login Peminjam

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection