{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.profile.elements.header-form')

<div class="login-form">
    <div class="section mt-2 mb-5">
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/resetpassword" method="POST">
            @csrf

            <input type="hidden" name="nomor_telepon" value="{{auth()->user()->nomor_telepon}}">
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="pertanyaan">Pertanyaan Keamanan</label>
                    <select class="form-select @error('pertanyaan') is-invalid @enderror" id="pertanyaan" aria-label="Default select example" name="pertanyaan" >
                        <option>Pilih..</option>
                        <option value="1">Dimana tempat wisata favorit anda?</option>
                        <option value="2">Siapakah nama guru favorit saat SMA?</option>
                        <option value="3">Apa Pekerjaan Impian anda?</option>
                        <option value="4">Apa makanan terenak menurut anda?</option>
                        <option value="5">Apa nama hewan peliharaan pertama anda?</option>
                    </select>
                </div>
                @error('pertanyaan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban Pertanyaan Keamanan" autofocus>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('jawaban')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="password1">Kata Sandi Baru</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Kata Sandi" autocomplete="off" autofocus>
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
                    <label class="form-label" for="password2">Ulangi Kata Sandi Baru</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password2" placeholder="Ulangi Kata Sandi" autocomplete="off" autofocus>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Reset</button>
            </div>

        </form>
    </div>
</div>

@endsection