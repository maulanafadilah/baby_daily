{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.elements.register-header')

<div class="login-form">
    <div class="section mt-1">
        <h1>Daftar</h1>
        <h4>Miliki akun untuk dapat mengakses semua fitur</h4>
    </div>
    <div class="section mt-1 mb-5">
        <form action="{{ __('register')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autofocus value="{{ old('nama_lengkap') }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('nama_lengkap')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="nomor_telepon1">Nomor Telepon</label>
                    <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon1" placeholder="Contoh: 0812345678909" value="{{ old('nomor_telepon') }}">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Kata Sandi" autocomplete="off" value="{{ old('password') }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="password_confirmation">Ulangi Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Ulangi Kata Sandi" autocomplete="off" value="{{ old('password_confirmation') }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <input type="hidden" name="id_peranan" value="4">

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>
            </div>

        </form>
    </div>
</div>

@endsection