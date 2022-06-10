{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')
<h4 class="subtitle mt-2 mx-2">Informasi Toko</h4>
<ul class="listview link-listview">
    <li><a href="{{ route('profile.show',1) }}">Profile Toko</a></li>
    <li><a href="{{ route('profile.edit',2) }}">Nomor Whatsapp</a></li>
    <li><a href="{{ route('profile.edit',3) }}">Link E-Commerce</a></li>
    <li><a href="{{ route('profile.edit',4) }}">Jadwal & Jam Operasional</a></li>
    <li><a href="{{ url('/notebooks') }}">Catatan Toko</a></li>
</ul>
<h4 class="subtitle mt-2 mx-2">Lainnya</h4>
<ul class="listview link-listview">
    <li><a href="{{ route('seller_faq') }}">FAQ</a></li>
    <li><a href="{{ route('seller_bantuan') }}">Pusat Bantuan</a></li>
</ul>
@endsection