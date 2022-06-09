{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')        
        
        <div class="section mt-2 mb-3" >
            <div class="row mt-2" >
                @foreach ($products as $item)
                <div class="col-6 mt-2" id="post-data">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="{{asset('img/products/'.$item->gambar)}}" class="image" alt="product image" onclick="window.location.href='/product/{{$item->id}}'">
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
                <a wire:click="load" class="btn btn-primary mt-2">Load More..</a>
            </div>

            
        </div>

@endsection
