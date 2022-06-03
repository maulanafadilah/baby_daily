{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-form')

        <div class="section mt-2">

                <div class="alert alert-outline-info" role="alert">
                    <h4 class="alert-title"><span><ion-icon name="information-circle-outline"></ion-icon></span> Informasi</h4>
                    Nomor NIK dan Nomor KK diperlukan untuk mencocokan data dengan No KK anak di Posyandu
                </div>
                <form class="needs-validation mt-2" method="post" action="/profile/">
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">No KK</label>
                            <input type="text" class="form-control" id="name5" name="no_kk" placeholder="Masukan Nomor KK" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">NIK</label>
                            <input type="text" class="form-control" id="name5" name="nik" placeholder="Masukan Nomor NIK" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>

                </form>
        </div>
@endsection