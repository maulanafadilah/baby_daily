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

        <!-- Terlaris -->
        <div class="section mt-3">
            <div class="section-title">Produk Unggulan <span><a href="/promotion">Lihat Semua</a></span></div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
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
        <div class="section full mt-3">
            <div class="section-title">Super Sale! <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" style="background: transparent; box-shadow: none">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center" onclick="window.location.href='/promotion'">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
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
            <div class="section-title">Mulai Dari 10 ribu <span><a href="/promotion">Lihat Semua</a></span></div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <!-- <p class="text">1 pack</p> -->
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
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
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy</a>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle me-1 mb-1 mt-1 btn-block" type="button" data-bs-toggle="dropdown">
                                    Etalalse
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy</a>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- *Button Menu -->

        <!-- List Produk -->
        <div class="section mt-2 mb-3">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product4.jpg" class="image" alt="product image" onclick="window.location.href='/product'">
                            <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                            <div class="price mt-1" onclick="window.location.href='/product'">$ 4.99</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- *List Produk -->

@endsection