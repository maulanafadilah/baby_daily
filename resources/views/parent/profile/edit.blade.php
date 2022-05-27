{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section mt-1">
        <h1>Posyandu Digital</h1>
        <h2>Edit Profile</h2>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    <div class="section mt-1 mb-5">
        <form action="{{ __('update_profile') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') ?? auth()->user()->nama_lengkap }}" autofocus>
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
                    <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon1" placeholder="Nomor Telepon" value="{{ old('nomor_telepon') ?? auth()->user()->nomor_telepon }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('nomor_telepon')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
            </div>

        </form>
    </div>
</div>

@endsection