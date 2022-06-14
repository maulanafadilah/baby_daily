{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        <div class="listview-title mt-2">Pengaturan Akun</div>
        <ul class="listview image-listview flush transparent">

            <li>
                <a href="/profile" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Informasi Data Diri
                    </div>
                </a>
            </li>
            <li>
                <a href="/account/{{auth()->user()->id}}" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Informasi Akun
                    </div>
                </a>
            </li>
            <!-- <li>
                <a href="#" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Pertanyaan Keamanan
                    </div>
                </a>
            </li> -->
            <li>
                <a href="/account/4/edit" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="create-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Ganti Kata Sandi
                    </div>
                </a>
            </li>
        </ul>


        <div class="listview-title mt-2">Lainnya</div>
        <form action="/logout" method="post">
        @csrf
        <ul class="listview image-listview flush transparent mb-1">
            <li>
                <button type="submit" href="component-notification.html" class="item"  style="border: 0; background:transparent;">
                    <div class="icon-box bg-danger">
                        <ion-icon name="exit-outline"></ion-icon>
                    </div>
                    <div class="in text-dark">
                        Keluar Akun
                    </div>
                    <div>
                    <ion-icon name="chevron-forward-outline" class="text-secondary"></ion-icon>
                    </div>
                </button>
            </li>
        </ul>
    </form>

@endsection