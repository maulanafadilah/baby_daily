{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section mt-1">
        <h1>Posyandu Digital</h1>
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
                    <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon1" placeholder="Nomor Telepon" value="{{ old('nomor_telepon') }}">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Password" autocomplete="off" value="{{ old('password') }}">
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
                    <label class="form-label" for="password_confirmation">Ulangi Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Ulangi password" autocomplete="off" value="{{ old('password_confirmation') }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="peranan">Peranan</label>
                    <select class="form-select @error('id_peranan') is-invalid @enderror" aria-label="Default select example" name="id_peranan" id="peranan">
                        <option value="5">Penjual / UMKM</option>
                        <option value="4">Customer / Orang Tua</option>
                    </select>
                </div>
                @error('id_peranan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-links">
                <div><a href="/login" class="text-muted">Sudah Punya Akun?</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>

        </form>
    </div>
</div>

@endsection