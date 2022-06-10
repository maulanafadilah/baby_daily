{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')

<div class="blog-post">
    <div class="post-body mt-2">
        <h2>{{ $notebooks->judul }}</h2>
        <div>{!! $notebooks->isi !!}</div>
    </div>
</div>

@include('sellers.elements.bottom-notebooks')
@endsection