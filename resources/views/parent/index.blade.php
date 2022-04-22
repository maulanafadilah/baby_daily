{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

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

        <!-- Kategori -->
        <div class="section full mt-3">
            <div class="section-title">Kategori</div>
            <div class="wide-block pt-1 pb-1 bg-transparent">
                <div class="row">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Makanan</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Pakaian</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Popok Bayi</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Susu Formula</h4>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Sabun Bayi</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" onclick="window.location.href='/category'">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#ModalListview">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Semua Kategori</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- *Kategori -->
        
        <!-- Modal Kategori -->
        <div class="modal fade modalbox" id="ModalListview" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Semua Kategori</h5>
                        <a href="#" data-bs-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body p-0">

                        <ul class="listview image-listview flush mb-2">
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Frank Boehm</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Sophie Asveld</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Rickie Baroch</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Carmelita Marsham</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Isaac Hunt</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar6.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Gabriel Moreira</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Nicolina Lindholm</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar8.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Emmalynn Mazzia</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar9.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Regina Pollastro</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar10.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Tania Pearson</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Frank Boehm</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Sophie Asveld</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Rickie Baroch</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Carmelita Marsham</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Isaac Hunt</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar6.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Gabriel Moreira</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Nicolina Lindholm</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar8.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Emmalynn Mazzia</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar9.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Regina Pollastro</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar10.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Tania Pearson</div>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- * Modal Kategori -->

        <!-- Informasi -->
        <div class="section full mt-1">
            <div class="section-title">Informasi</div>
            <div class="wide-block bg-transparent">
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="assets/img/sample/photo/wide3.jpg" class=" card-img overlay-img" alt="image" onclick="window.location.href='/information'">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="assets/img/sample/photo/wide3.jpg" class=" card-img overlay-img" alt="image" onclick="window.location.href='/information'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *Informasi -->

        <!-- Promo Hari Ini -->
        <div class="section full mt-3">
            <div class="section-title">Promo Hari Ini <span><a href="/promotion">Lihat Semua</a></span></div>
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
            <div class="section-title">Lagi Banyak Dicari <span><a href="/promotion">Lihat Semua</a></span></div>
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

        <!-- Single Banner -->
        <div class="section mt-5">
            <div class="card">
                <img src="assets/img/sample/photo/wide3.jpg" class="card-img overlay-img single-banner" alt="image" onclick="window.location.href='/information'">
            </div>
        </div>
        <!-- #Single Banner -->

        <!-- Brand Pilihan -->
        <div class="section full mt-3">
            <div class="section-title">Brand Pilihan <span><a href="/brand">Lihat Semua</a></span></div>
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

        <!-- Umkm Mitra -->
        <div class="section mt-3">
            <div class="section-title">UMKM Mitra <span><a href="mitra">Lihat Semua</a></span></div>
            <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide" onclick="window.location.href='/store'">
                                <div class="card product-card">
                                    <div class="card-body text-center">
                                        <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" onclick="window.location.href='/store'">
                                <div class="card product-card">
                                    <div class="card-body text-center">
                                        <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" onclick="window.location.href='/store'">
                                <div class="card product-card">
                                    <div class="card-body text-center">
                                        <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" onclick="window.location.href='/store'">
                                <div class="card product-card">
                                    <div class="card-body text-center">
                                        <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                                        <h2 class="title">Spinach</h2>
                                        <p class="text">1 pack</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <!-- *Umkm Mitra -->
        
        <!-- Seasonal Promotion -->
        <div class="section full mt-3">
            <div class="section-title">Spesial Ramadhan <span><a href="#">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide  onclick="window.location.href='/category'"d-flex justify-content-center">
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
        <!-- *Seasonal Promotion -->

        <!-- Button Menu -->
        <div class="section full mt-3 mb-3">
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