{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.mitra-bottom')

        <!-- Slider -->
        <div class="section full mt-2 mb-3">
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/wide1.jpg" alt="alt" class="imaged w-100" onclick="window.location.href='/discovery'">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/wide2.jpg" alt="alt" class="imaged w-100" onclick="window.location.href='/discovery'">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/wide3.jpg" alt="alt" class="imaged w-100" onclick="window.location.href='/discovery'">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Slider -->

        <div class="section full mt-3 mb-3">

            <div class="section-title">Highlight</div>
            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d1.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Progressive web app ready</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Reusable components</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d3.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Great for phones & tablets</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Change the styles in sass</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d6.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Sketch source file included</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d7.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">RTL (Right to Left) Support</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d5.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Written with a code structure</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>

        <!-- Kupon -->
        <div class="section">
            <div class="section-title">Kode Diskon</div>
            <!-- <div class="wide-block bg-transparent"> -->
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="assets/img/sample/photo/wide3.jpg" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="assets/img/sample/photo/wide3.jpg" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <!-- Kupon -->
    

        <!-- Promo Hari Ini -->
        <div class="section full mt-3">
            <div class="section-title">Banting Harga <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" >
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center">
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
            </div>
        </div>
        <!-- *Promo Hari Ini -->

        <!-- Terlaris -->
        <div class="section mt-3">
            <div class="section-title">Terlaris <span><a href="/promotion">Lihat Semua</a></span></div>
            <!-- <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;"> -->
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
            <!-- </div> -->
        </div>
        <!-- *Terlaris -->

        <!-- Promo Hari Ini -->
        <div class="section full mt-4">
            <div class="section-title">UMKM Deals! <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" >
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center">
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
            </div>

            <div class="wide-block pt-1 pb-1 mt-2" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" >
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center">
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
            </div>
        </div>
        <!-- *Promo Hari Ini -->

        <div class="section mt-3 mb-3">
            <div class="section-title">Daftar UMKM <span><a href="/mitra/umkm">Lihat Semua</a></span></div>
            <div class="row mt-2">
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            <h2 class="title">Spinach</h2>
                            <p class="text">1 pack</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
@endsection