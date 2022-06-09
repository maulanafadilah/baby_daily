{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-back')
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
                @if($biodata->foto_orangtua == true)
                <img src="{{asset('storage/'.$biodata->foto_orangtua)}}" alt="avatar" class="imaged w64 rounded">
                @else
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
                @endif
            </div>
                <div class="in mt-1" style="text-align:center">
                    <a href="/profile/6/edit" class="text-primary">Ubah Foto Profil</a>
                </div>
        </div>

        <div class="section">
        <div class="divider text-secondary mt-3"></div>
        </div>

        <div class="section full">
            <!-- <div class="wide-block mt-3"> -->
            <div class="section-title pt-2">Informasi Data Diri</div>
            <ul class="listview link-listview bg-transparent mt-1" style="border: 0;">
                <li>
                    <a href="/profile/1/edit">
                        <div class="col text-secondary">
                            Nama Lengkap
                        </div>
                        <div class="col">
                            {{auth()->user()->nama_lengkap}}
                        </div>
                    </a>                   
                </li>
                <li>
                    <a href="/profile/2/edit">
                        <div class="col text-secondary">
                            NIK
                        </div>
                        <div class="col">
                            {{$biodata->nik}}
                        </div>
                    </a> 
                </li>
                <li>
                    <a href="/profile/3/edit">
                        <div class="col text-secondary">
                            No KK
                        </div>
                        <div class="col">
                            {{$biodata->no_kk}}
                        </div>
                    </a>
                </li>
            </ul>
            <!-- </div> -->
        </div>

        <div class="section full mt-2">
            <!-- <div class="wide-block mt-3"> -->
            <div class="section-title pt-2">Informasi Tambahan</div>
            <ul class="listview link-listview bg-transparent mt-1" style="border: 0;">
                <li>
                    <a href="/profile/4/edit">
                        <div class="col text-secondary">
                            Tanggal Lahir
                        </div>
                        @if($biodata->tanggal_lahir == true)
                        <div class="col">
                            {{$biodata->tanggal_lahir}}
                        </div>
                        @else
                        <div class="col text-secondary">
                            (Opsional)
                        </div>
                        @endif
                    </a>                   
                </li>
                <li>
                    <a href="/profile/5/edit">
                        <div class="col text-secondary">
                            Jenis Kelamin
                        </div>
                        @if($biodata->jenis_kelamin == true)
                        <div class="col">
                            {{$biodata->jenis_kelamin}}
                        </div>
                        @else
                        <div class="col text-secondary">
                            (Opsional)
                        </div>
                        @endif
                    </a> 
                </li>
            </ul>
            <!-- </div> -->
        </div>
@endsection