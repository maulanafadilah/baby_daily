{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section mt-1">
        <h1>Posyandu Digital</h1>
        <h2>Reset Password</h2>
    </div>
    <div class="section mt-1 mb-5">
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ __('resetpassword')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
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
                    <select class="form-select @error('pertanyaan') is-invalid @enderror" aria-label="Default select example" name="pertanyaan">
                        <option value="1">Siapakah nama ayahmu?</option>
                        <option value="2">Siapakah nama ibumu?</option>
                        <option value="3">Siapakah nama gurumu?</option>
                        <option value="4">Apa makanan favoritmu?</option>
                        <option value="5">Apakah nama hewan peliharaanmu?</option>
                    </select>
                </div>
                @error('pertanyaan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban" autofocus>
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password1" placeholder="Password" autocomplete="off">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password1" placeholder="Ulangi password" autocomplete="off">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-links">
                <div><a href="/login" class="text-muted">Sudah Punya Akun?</a></div>
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Reset Password</button>
            </div>

        </form>
    </div>
</div>

@endsection