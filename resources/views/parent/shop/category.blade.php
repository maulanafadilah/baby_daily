{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        <div class="section mt-2 mb-3">
            <div class="card">
                <img src="{{asset('assets/img/sample/photo/wide1.jpg')}}" class="card-img overlay-img" alt="image">
            </div>
        </div>

         <!-- Kupon -->
         <div class="section">
            <div class="section-title">Kode Diskon</div>
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('assets/img/sample/photo/wide3.jpg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('assets/img/sample/photo/wide3.jpg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                </div>
        </div>
        <!-- *Kupon -->

        <!-- Brand Pilihan -->
        <!-- <div class="section full mt-3">
            <div class="section-title">Brand Pilihan <span><a href="/brand">Lihat Semua</a></span></div>
            <div class="carousel-small splide mt-1"  style="margin-left: -78px !important; padding-right: -12px !important;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{asset('assets/img/sample/photo/2.jpg')}}" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/img/sample/photo/3.jpg')}}" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/img/sample/photo/4.jpg')}}" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('assets/img/sample/photo/1.jpg')}}" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- *Brand Pilihan -->

        <!-- Terlaris -->
        <div class="section mt-3">
            <div class="section-title">Ayo Restock! <span><a href="/promotion">Lihat Semua</a></span></div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($product_list as $item)
                            <li class="splide__slide">
                                <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                                    <div class="card-body">
                                    <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
        <!-- *Terlaris -->

        <!-- Button Menu -->
        <div class="section mt-3 mb-2">
                    <!-- <div class="section-title">Semua Produk</div> -->
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1 mb-1 mt-1 btn-block">
                                <ion-icon name="document-text-outline"></ion-icon>
                                Filter
                            </button>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle me-1 mb-1 mt-1 btn-block" type="button" data-bs-toggle="dropdown">
                                    Terbaru
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle me-1 mb-1 mt-1 btn-block" type="button" data-bs-toggle="dropdown">
                                    Populer
                                </button>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- *Button Menu -->

        <!-- List Produk -->
        <div class="section mt-2 mb-3">
            <div class="row mt-2">
                @foreach ($product_list as $item)
                <div class="col-6 mt-2">
                    <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                        <div class="card-body">
                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                            <h2 class="title">{{$item->nama_produk}}</h2>
                            <div class="price mt-1">Rp{{$item->harga}}</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
        <!-- *List Produk -->
@endsection