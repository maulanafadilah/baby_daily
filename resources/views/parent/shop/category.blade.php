{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        <div class="section mt-2 mb-3">
            <div class="card">
                <img src="assets/img/sample/photo/wide1.jpg" class="card-img overlay-img" alt="image">
            </div>
        </div>

         <!-- Kupon -->
         <div class="section full">
            <div class="section-title">Kode Diskon</div>
            <div class="wide-block bg-transparent">
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
            </div>
        </div>
        <!-- *Kupon -->

        <!-- Brand Pilihan -->
        <div class="section full mt-3">
            <div class="section-title">Brand Pilihan <span><a href="#">Lihat Semua</a></span></div>
            <div class="carousel-small splide mt-1"  style="margin-left: -78px !important; padding-right: -12px !important;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/2.jpg" alt="alt" class="imaged w-100 w64">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100 w64">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/4.jpg" alt="alt" class="imaged w-100 w64">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100 w64">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Brand Pilihan -->

        <!-- Terlaris -->
        <div class="section mt-3">
            <div class="section-title">Lagi Diskon <span><a href="#">Lihat Semua</a></span></div>
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

         <!-- Terlaris -->
         <div class="section mt-3">
            <div class="section-title">Ayo Restock! <span><a href="#">Lihat Semua</a></span></div>
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

        <!-- Button Menu -->
        <div class="section full mt-5 mb-4">
            <div class="carousel-multiple splide mt-1" id="myBtnContainer">
                <div class="splide__track" >
                    <ul class="splide__list" >
                        <li class="splide__slide pt-2" >
                            <div class="card" style="box-shadow: none; background: transparent;">
                                <button type="button" class="btn btn-outline-primary me-1 mb-1 active" onclick="filterSelection('Makanan')">Makanan</button>
                            </div>
                        </li>
                        <li class="splide__slide pt-2">
                            <div class="card" style="box-shadow: none; background: transparent;">
                                <button type="button" class="btn btn-outline-info me-1 mb-1" onclick="filterSelection('Susu-Formula')">Susu Formula</button>
                            </div>
                        </li>
                        <li class="splide__slide pt-2">
                            <div class="card" style="box-shadow: none; background: transparent;">
                                <button type="button" class="btn btn-outline-danger me-1 mb-1" onclick="filterSelection('Popok-Bayi')">Popok Bayi</button>
                            </div>
                        </li>
                        <li class="splide__slide pt-2">
                            <div class="card" style="box-shadow: none; background: transparent;">
                            <button type="button" class="btn btn-outline-success me-1 mb-1">SUCCESS</button>
                            </div>
                        </li>
                        <li class="splide__slide pt-2">
                            <div class="card" style="box-shadow: none; background: transparent;">
                            <button type="button" class="btn btn-outline-warning me-1 mb-1">WARNING</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Button Menu -->

        <!-- List Produk -->
        <div class="section mt-2 mb-3">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Susu-Formula">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card filterDiv Popok-Bayi">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                            <h2 class="title">Beetroot</h2>
                            <p class="text">1 piece</p>
                            <div class="price">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Makanan">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card filterDiv Makanan">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                            <h2 class="title">Beetroot</h2>
                            <p class="text">1 piece</p>
                            <div class="price">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Popok-Bayi">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card filterDiv Susu-Formula">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                            <h2 class="title">Beetroot</h2>
                            <p class="text">1 piece</p>
                            <div class="price">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Susu-Formula">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card filterDiv Popok-Bayi">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                            <h2 class="title">Beetroot</h2>
                            <p class="text">1 piece</p>
                            <div class="price">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Makanan">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card filterDiv Makanan">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image">
                            <h2 class="title">Beetroot</h2>
                            <p class="text">1 piece</p>
                            <div class="price">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *List Produk -->
@endsection