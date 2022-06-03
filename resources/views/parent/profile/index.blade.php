{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-back')
        <div class="section mt-3">
            <div class="avatar" style="text-align:center">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
            </div>
                <div class="in mt-1" style="text-align:center">
                    <a href="profile/create" class="text-primary">Ubah Foto Profil</a>
                </div>
        </div>

        <div class="section">
        <div class="divider text-secondary mt-3"></div>
        </div>

        <div class="section full">
            <!-- <div class="wide-block mt-3"> -->
            <div class="section-title pt-2">Informasi Data Diri <span><a href="profile/create">Edit</a></span></div>
            <ul class="listview simple-listview bg-transparent mt-1" style="border: 0;">
                <li>
                        <div class="col text-secondary">
                            Nama Lengkap
                        </div>
                        <div class="col">
                            {{auth()->user()->nama_lengkap}}
                        </div>                  
                </li>
                <li>
                        <div class="col text-secondary">
                            NIK
                        </div>
                        <div class="col text-secondary">
                            Perlu Diisi untuk KMS
                        </div>
                </li>
                <li>
                        <div class="col text-secondary">
                            No KK
                        </div>
                        <div class="col text-secondary">
                            Perlu Diisi untuk KMS
                        </div>
                    </a>
                </li>
            </ul>
            <!-- </div> -->
        </div>

        <div class="section full mt-2">
            <!-- <div class="wide-block mt-3"> -->
            <div class="section-title pt-2">Informasi Tambahan</div>
            <ul class="listview simple-listview bg-transparent mt-1" style="border: 0;">
                <li>
                        <div class="col text-secondary">
                            Tanggal Lahir
                        </div>
                        <div class="col text-secondary">
                            (Opsional)
                        </div>                  
                </li>
                <li>
                        <div class="col text-secondary">
                            Jenis Kelamin
                        </div>
                        <div class="col text-secondary">
                            (Opsional)
                        </div>
                </li>
            </ul>
            <!-- </div> -->
        </div>
@endsection