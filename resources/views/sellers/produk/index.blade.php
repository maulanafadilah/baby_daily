{{-- Extends layout --}}
@extends('sellers.layout.default')
{{-- Content --}}
@section('content')
<div class="header-large-title">
    <h1 class="title">Produk Anda</h1>
    <h4 class="subtitle">{{ $sellers->nama_toko }}</h4>
    <a href="{{ route('sellerproducts.create') }}" class="btn btn-primary mt-1">Tambah Produk</a>
</div>
<div class="section full mt-3 mb-3">
    <ul class="listview image-listview media mb-2">
        @foreach($products as $product)
        <li>
            <a href="{{ route('sellerproducts.show',$product->id) }}" class="item">
                <div class="imageWrapper">
                    <img src="{{ asset('storage/'.$product->cover) }}" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        {{ $product->nama_produk }}
                        <div class="text-muted">Jumlah Penjualannya</div>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>

</div>
@endsection