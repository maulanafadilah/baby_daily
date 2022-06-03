{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        @foreach($seller_detail as $item)
        <div class="section mt-2">
            <div class="profile-head">
                <div class="avatar">
                    <img src="{{ asset('img/profile/'.$item->foto_penjual) }}" alt="avatar" class="imaged w64 rounded">
                </div>
                <div class="in">
                    <h3 class="name">{{$item->nama_toko}}</h3>
                    <h5 class="subtext">{{$item->kabupaten}}</h5>
                </div>
            </div>
        </div>
        @endforeach

        <div class="section full mt-2">
            <div class="profile-stats ps-2 pe-2">
                <a href="#" class="item">
                    <strong>4.9</strong>Rating & Ulasan
                </a>
                <a href="#" class="item">
                    <strong>1 jam</strong>Pesan Dibalas
                </a>

                <a href="#" class="item">
                    <strong>09.00-17.30</strong>Jam Operasi Toko
                </a>
            </div>
        </div>

        <div class="section mt-2 mb-2">
            <div class="profile-info">
                <!-- <div class=" bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa.
                </div> -->
                <div class="link text-center mt-2">
                    <!-- <button class="btn btn-icon btn-outline-secondary me-1 mb-1 btn-block" type="button"><ion-icon name="happy-outline"></ion-icon></button> -->
                <button type="button" class="btn btn-outline-secondary me-1 mb-1 btn-block">Chat</button>
                <button type="button" class="btn btn-outline-primary me-1 mb-1 btn-block">Follow</button>
                </div>
            </div>
        </div>

        <div class="section full">
            <div class="wide-block transparent p-0">
                <ul class="nav nav-tabs lined iconed" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#feed" role="tab">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#friends" role="tab">
                            <ion-icon name="cube-outline"></ion-icon>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#bookmarks" role="tab">
                            <ion-icon name="file-tray-full-outline"></ion-icon>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                            <ion-icon name="information-circle-outline"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class="section full mb-2">
            <div class="tab-content">

                <!-- feed -->
                <div class="tab-pane fade show active" id="feed" role="tabpanel">
                    
                    <!-- Slider -->
                    <!-- <div class="section full mt-2 mb-3">
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
                    </div> -->
                    <!-- *Slider -->

                    <!-- Kupon -->
                    <!-- <div class="section">
                        <div class="section-title">Kode Diskon</div>
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
                    </div> -->
                    <!-- Kupon -->

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
                    <div class="section mt-1 mb-3">
                        <div class="row mt-2">
                            @foreach ($product_list as $item)
                            <div class="col-6 mt-2">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="{{asset('img/products/'.$item->gambar) }}" class="image" alt="product image" onclick="window.location.href='/product/{{$item->id_produk}}'">
                                        <h2 class="title" onclick="window.location.href='/product'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <!-- *List Produk -->
                    
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <!-- <div class="tab-pane fade" id="friends" role="tabpanel"> -->

                    <!-- Button Menu -->
                    <!-- <div class="section mt-3 mb-2">
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
                    </div> -->
                    <!-- *Button Menu -->

                    <!-- List Produk -->
                    <!-- <div class="section mt-1 mb-3">
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
                    </div> -->
                    <!-- *List Produk -->
                <!-- </div> -->
                <!-- * friends -->

                <!--  bookmarks -->
                <!-- <div class="tab-pane fade" id="bookmarks" role="tabpanel">
                    <ul class="listview image-listview media flush transparent pt-1">
                        <li>
                            <a href="#" class="item">
                                <div class="imageWrapper">
                                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Birds
                                        <div class="text-muted">62 photos</div>
                                    </div>
                                    <span class="badge badge-primary">5</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="imageWrapper">
                                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Street Photos
                                        <div class="text-muted">15 photos</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="imageWrapper">
                                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Dogs
                                        <div class="text-muted">97 photos</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="imageWrapper">
                                    <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Favorites
                                        <div class="text-muted">20 photos</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="imageWrapper">
                                    <img src="assets/img/sample/photo/5.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Nature
                                        <div class="text-muted">51 photos</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> -->
                <!-- * bookmarks -->

                <!-- settings -->
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <ul class="listview image-listview text flush transparent pt-1">
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Informasi Toko</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Catatan Toko</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Syarat & Ketentuan</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- * settings -->
            </div>
        </div>
        <!-- * tab content -->

        
@endsection