{{-- Extends layout --}}
@extends('sellers.layout.default')


{{-- Content --}}
@section('content')

@if(session()->has('success'))
<div id="toast-12" class="toast-box toast-center show">
    <div class="in">
        <div class="text">
            {{ session('success') }}
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
        closeToastBox('toast-12')
    }, 2000);
</script>
@endif

<div class="section mt-3">
    <div class="avatar" style="text-align:center">
        @if($sellers->foto_penjual == true)
        <img src="{{ asset('storage/'.$sellers->foto_penjual) }}" alt="avatar" class="imaged w64 rounded">
        @else
        <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
        @endif
    </div>
    <div class="in mt-1" style="text-align:center">
        <a href="{{ route('profile.edit',12) }}" class="text-primary">Ubah Foto Profil</a>
    </div>
</div>

<div class="section">
    <div class="divider text-secondary mt-3"></div>
</div>

<div class="section full">
    <!-- <div class="wide-block mt-3"> -->
    <div class="section-title pt-2">Informasi Toko</div>
    <ul class="listview link-listview bg-transparent mt-1" style="border: 0;">
        <li>
            <a href="{{ route('profile.edit',5) }}">
                <div class="col text-secondary">
                    Nama Toko
                </div>
                <div class="col">
                    {{ $sellers->nama_toko }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',6) }}">
                <div class="col text-secondary">
                    Provinsi
                </div>
                <div class="col">
                    {{ $sellers->provinsi }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',7) }}">
                <div class="col text-secondary">
                    Kota/Kabupaten
                </div>
                <div class="col">
                    {{ $sellers->kabupaten }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',8) }}">
                <div class="col text-secondary">
                    Kecamatan
                </div>
                <div class="col">
                    {{ $sellers->kecamatan }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',9) }}">
                <div class="col text-secondary">
                    Kelurahan
                </div>
                <div class="col">
                    {{ $sellers->kelurahan }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',10) }}">
                <div class="col text-secondary">
                    Alamat
                </div>
                <div class="col">
                    {{ $sellers->alamat }}
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit',11) }}">
                <div class="col text-secondary">
                    Kode Pos
                </div>
                <div class="col">
                    {{ $sellers->kode_pos }}
                </div>
            </a>
        </li>
    </ul>
    <!-- </div> -->
</div>
@endsection