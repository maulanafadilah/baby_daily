{{-- Extends layout --}}
@extends('sellers.layout.default')
{{-- Style --}}
@section('style')
<style type="text/css">
    .card {
        border-radius: 20%;
    }
</style>
@endsection

{{-- Content --}}
@section('content')

<div class="header-large-title">
    <h1 class="title">Dashboard</h1>
    <h4 class="subtitle">{{ $sellers->nama_toko }}</h4>
</div>

<div class="section full mt-3 mb-3">

    <h2 class="mx-3">Jumlah Produk</h2>
    <div class="row">
        <div class="card w-50 h-100 mb-3">
            <div class="card-body">
                <p class="card-title" style="font-size: 20px">Stok Produk</p>
                <p class="card-text">{{ $stok }}</p>
            </div>
        </div>
        <div class="card w-50 h-100 mb-3">
            <div class="card-body">
                <p class="card-title" style="font-size: 20px">Pengeluaran</p>
                <p class="card-text">Rp.Jumlah</p>
            </div>
        </div>
    </div>

    <div class="section full mt-3 mb-3">

        <h2 class="mx-3">Produk Terbaru</h2>
        <ul class="listview image-listview media mb-2">
            @foreach($products as $product)
            <li>
                <a href="{{ route('sellerproducts.show',$product->id) }}" class="item">
                    <div class="imageWrapper">
                        <img src="/products/images/{{ $product->gambar }}" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            {{ $product->nama_produk }}
                            <div class="text-muted">Jumlah Stok {{ $product->stok }}</div>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection