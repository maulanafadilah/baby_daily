{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')
<div class="header-large-title">
    <a href="{{ route('notebooks.create') }}" class="btn btn-secondary mt-2 mb-2 ">Tambah Catatan</a>
</div>
<ul class="listview link-listview">
    @foreach($notebooks as $notebook)
    <li>
        <a href="{{ route('notebooks.show',$notebook->id) }}" class="item">
            <div class="item">
                <div class="in">
                    <div>{{ $notebook->judul }}</div>
                </div>
            </div>
        </a>
    </li>
    @endforeach
</ul>
@endsection