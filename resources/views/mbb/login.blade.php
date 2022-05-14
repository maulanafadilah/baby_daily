{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section">
        <img src="{{ URL::asset('assets/img/sample/photo/vector4.png') }}" alt="image" class="form-image">
    </div>
    <div class="section mt-1">
        <h1>Posyandu Digital</h1>
        <h4>Fill Email Address and Password</h4>
        @error('note')
        <span class="text-danger">{{ $message }}</span>
        @endif
    </div>
    <div class="section mt-1 mb-5">
        <form action="{{ __('login')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <input type="email" class="form-control" name="email" id="email1" placeholder="Email address" autofocus>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Password" autocomplete="off">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-links mt-2">
                <div><a href="page-forgot-password.html" class="text-muted">Forgot Password?</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
            </div>

        </form>
    </div>
</div>

@endsection