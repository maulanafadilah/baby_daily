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

<div class="login-form">
    <div class="section">
        <img src="{{ URL::asset('assets/img/sample/photo/vector4.png') }}" alt="image" class="form-image">
    </div>
    <div class="section mt-1">
        <h1>Masuk</h1>
        <h4>Masuk untuk menggunakan semua fitur</h4>
    </div>
    <div class="section mt-1 mb-5">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ __('login')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="nomor_telepon1">Nomor Telepon</label>
                    <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon1" placeholder="Contoh: 0812345678909" autofocus>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('nomor_telepon')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="password1">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Kata Sandi" autocomplete="off">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-links mt-2">
                <div>
                    <a href="/register">Daftar Sekarang</a>
                </div>
                <div><a href="/reset" class="text-muted">Lupa Kata Sandi?</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
            </div>

        </form>
    </div>
</div>

@endsection