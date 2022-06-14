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
                @if($profile_pic == true)
                <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_64,c_fill,ar_1:1,g_auto,r_max/{{$profile_pic->foto_orangtua}}" alt="foto_profile">
                @else
                <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="avatar" class="imaged w64 rounded">
                @endif
            </div>
                <div class="in mt-1" style="text-align:center">
                    <h4 class="text-secondary">ID Pengguna: {{auth()->user()->id}}</h4>
                </div>
        </div>

        <div class="section">
        <div class="divider text-secondary mt-3"></div>
        </div>

        <div class="section full">
            <!-- <div class="wide-block mt-3"> -->
            <div class="section-title pt-2">Informasi Akun</div>
            <ul class="listview link-listview bg-transparent mt-1" style="border: 0;">
                <li>
                    <a href="/account/1/edit">
                        <div class="col text-secondary">
                            Nama Lengkap
                        </div>
                        <div class="col">
                            {{auth()->user()->nama_lengkap}}
                        </div>
                    </a>                   
                </li>
                <li>
                    <a href="/account/2/edit">
                        <div class="col text-secondary">
                            Nomor Telepon
                        </div>
                        <div class="col">
                            {{auth()->user()->nomor_telepon}}
                        </div>
                    </a> 
                </li>
                <li>
                    <a href="/account/3/edit">
                        <div class="col text-secondary">
                            Email
                        </div>
                        @if(auth()->user()->email == true)
                        <div class="col">
                            {{auth()->user()->email}}
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