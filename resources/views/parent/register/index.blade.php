{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.elements.register-header')

<div class="login-form">
            <div class="section">
                <h1>Daftar</h1>
                <h4>Mohon Isi Formulir Berikut</h4>
            </div>
            <div class="section mt-2 mb-5">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="nama_lengkap">Nama</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

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

                    <input type="hidden" name="id_peranan" value="4">

                    <!-- <div class=" mt-1 text-start">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheckb1">
                            <label class="form-check-label" for="customCheckb1">I Agree <a href="#">Terms &
                                    Conditions</a></label>
                        </div>

                    </div> -->

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>
                    </div>

                </form>
            </div>
        </div>

@endsection