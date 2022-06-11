{{-- Extends layout --}}
@extends('sellers.layout.default')
{{-- Content --}}
@section('content')
<div class="header-large-title">
    <h1 class="title">Photo Produk</h1>
</div>
<div class="section full mt-3 mb-3">
    <h3 class="ms-2">Cover Produk</h3>
    <ul class="listview image-listview media mb-2">
        <li>
            <a href="{{ route('images.edit',$image->id) }}" id="edit_data" class="item">
                <div class="imageWrapper">
                    <img src="{{ asset('storage/'.$image->cover) }}" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        <div class="text-muted">Ganti Photo</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <h3 class="ms-2">Gambar-Gambar Produk</h3>
    <ul class="listview image-listview media mb-2">
        @php
        $no = 0
        @endphp
        @foreach($product_images as $product_image)
        @if($no > 0)
        <li>
            <a href="{{ route('images.edit',$product_image->id) }}" id="edit_data" class="item">
                <div class="imageWrapper">
                    <img src="{{ asset('storage/'.$product_image->gambar) }}" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        <div class="text-muted">Ganti Photo</div>
                    </div>
                </div>
            </a>
        </li>
        @endif
        @php
        $no++
        @endphp
        @endforeach
    </ul>

</div>

@endsection

<!-- endsection -->