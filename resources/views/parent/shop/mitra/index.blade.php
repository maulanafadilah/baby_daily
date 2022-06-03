{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')
@include('parent.shop.elements.mitra-header')
@include('parent.shop.elements.mitra-bottom')

        <!-- Slider -->
        <div class="section full mt-2 mb-3">
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra1.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra3.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra2.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Slider -->

        <!-- Informasi -->
        <div class="section full mt-1">
            <div class="section-title">Informasi</div>
            <div class="wide-block bg-transparent" style="border: 0;">
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('img/banner/info1.jpeg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('img/banner/info2.jpeg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Informasi -->
    
        <!-- UMKM Deals -->
        <div class="section full mt-4">
            <div class="section-title">UMKM Deals! <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" style="background: transparent; box-shadow: none">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="{{asset('assets/img/sample/photo/800x1235.png')}}" alt="alt" class="image d-flex align-items-center" onclick="window.location.href='/promotion'">
                                    </div>
                                </div>
                            </li>

                            @foreach ($products_pop as $item)
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="{{asset('img/products/'.$item->gambar)}}" class="image" alt="product image"  onclick="window.location.href='/product/{{$item->id_produk}}'">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id_produk}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id_produk}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Favorite</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- *UMKM Deals -->

        <!-- Produk Pilihan -->
        <div class="section mt-3">
            <div class="section-title">Produk Pilihan <span><a href="/promotion">Lihat Semua</a></span></div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($products_pop as $item)
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="{{asset('img/products/'.$item->gambar)}}" class="image" alt="product image"  onclick="window.location.href='/product/{{$item->id_produk}}'">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id_produk}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id_produk}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Favorite</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <!-- *Produk Pilihan -->

        <!-- Terlaris -->
        <!-- <div class="section mt-3">
            <div class="section-title">Terlaris <span><a href="/promotion">Lihat Semua</a></span></div>
            
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                        <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product3.jpg" class="image" alt="product image">
                                        <h2 class="title">Hot Chili Pepper</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 14.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                                        <h2 class="title">Beetroot</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 2.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                                        <h2 class="title">Beetroot</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 2.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                                        <h2 class="title">Beetroot</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 2.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                                        <h2 class="title">Beetroot</h2>
                                        <p class="text">1 pack</p>
                                        <div class="price">$ 2.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            
        </div> -->
        <!-- *Terlaris -->

        

        <div class="section mt-3 mb-3">
            <div class="section-title">Daftar UMKM <span><a href="/mitra/ppkm/umkm">Lihat Semua</a></span></div>
            <div class="row mt-2">
                @foreach($seller as $item)
                <div class="col">
                    <div class="card product-card" onclick="window.location.href='/store/{{$item->id}}'">
                        <div class="card-body text-center">
                            <img src="{{asset('img/profile/'.$item->foto_penjual)}}" class="imaged rounded w64" alt="seller image">
                            <h2 class="title">{{$item->nama_toko}}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-2">
                @foreach($seller_new as $item)
                <div class="col">
                    <div class="card product-card" onclick="window.location.href='/store/{{$item->id}}'">
                        <div class="card-body text-center">
                            <img src="{{asset('img/profile/'.$item->foto_penjual)}}" class="imaged rounded w64" alt="seller image">
                            <h2 class="title">{{$item->nama_toko}}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        
@endsection