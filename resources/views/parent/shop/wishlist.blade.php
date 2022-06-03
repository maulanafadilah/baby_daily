{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')
<div class="section">
            <div class="section-title mt-1 mb-1">Semua (6)</div>
            @foreach($wishlist as $item)
                <div class="card cart-item mb-2">
                    <div class="card-body">
                        <div class="in">
                            <img src="img/products/{{$item->gambar}}" alt="product" class="imaged">
                            <div class="text">
                                <h3 class="title">{{$item->nama_produk}}</h3>
                                <strong class="price">Rp{{$item->harga}}</strong>
                            </div>
                        </div>
                        <div class="cart-item-footer">
                            <form method="post" action="/wishlist/{{$item->idw}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>

                            
                            <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>

@endsection