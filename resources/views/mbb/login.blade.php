{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section">
        <img src="{{ URL::asset('assets/img/sample/photo/vector4.png') }}" alt="image" class="form-image">
    </div>
    <div class="section mt-1">
        <h1>Posyandu Digital</h1>
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
                    <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon1" placeholder="Phone Number" autofocus>
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
                    <label class="form-label" for="password1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Password" autocomplete="off">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-links">
                <div><a href="/register" class="text-primary">Belum Punya Akun?</a></div>
            </div>

            <div class="form-links">
                <div><a href="/reset" class="text-muted">Lupa Password</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
            </div>

        </form>
    </div>
</div>

@endsection