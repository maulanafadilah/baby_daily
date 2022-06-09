{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.shop.elements.product-header')
        <div class="section mt-2 mb-3">
        <div class="section-title">Menampilkan: "{{request('search')}}" <span class="text-primary">( {{$count}} )</span> </div>
            <div class="row mt-1">
                @foreach ($result as $item)
                <div class="col-6 mt-2">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="img/products/{{$item->gambar}}" class="image" alt="product image" onclick="window.location.href='/product/{{$item->id}}'">
                            <h2 class="title" onclick="window.location.href='/product/{{$item->id}}'">{{$item->nama_produk}}</h2>
                            <div class="price mt-1" onclick="window.location.href='/product/{{$item->id}}'">Rp{{$item->harga}}</div>
                            @if($item->tag == '2')
                            <form method="post" action="/wishlist/">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                <input type="hidden" name="id_produk" value="{{$item->id}}">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">+ Favorite</button>
                            </form>
                            @else
                            <form method="post" action="/cart/">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                <input type="hidden" name="id_produk" value="{{$item->id}}">
                                <input type="hidden" name="kuantitas" value="1">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">+ Keranjang</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>

@endsection