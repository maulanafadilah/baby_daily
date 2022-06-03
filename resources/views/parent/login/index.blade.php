{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

        @if(session()->has('loginError'))
        <div class="section">
                <div class="alert alert-danger mb-2 alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </div>
		@endif

        <div class="login-form mt-1">
            <div class="section">
                <img src="assets/img/sample/photo/vector4.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Masuk</h1>
                <h4>Masuk untuk menggunakan semua fitur</h4>
            </div>
            <div class="section mt-1 mb-5">
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="nomor_telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Contoh: 0812345678909">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="password">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="password" autocomplete="off" placeholder="Kata Sandi">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="/register">Daftar Sekarang</a>
                        </div>
                        <div><a href="#" class="text-muted">Lupa Kata Sandi?</a></div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                    </div>

                </form>
            </div>
        </div>


@endsection