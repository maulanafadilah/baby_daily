
{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.cart-header')

        <div class="section full">
            <div class="section-title mt-1 mb-1">Semua (3)</div>
            <div class="wide-block pt-2 pb-1">
                <!-- item -->
                <div class="card cart-item mb-2">
                    <div class="card-body">
                        <div class="in">
                            <img src="assets/img/sample/photo/product1.jpg" alt="product" class="imaged">
                            <div class="text">
                                <h3 class="title">Organic Apple</h3>
                                <p class="detail">1 kg</p>
                                <strong class="price">$ 5.99</strong>
                            </div>
                        </div>
                        <div class="cart-item-footer">
                            <div class="stepper stepper-sm stepper-secondary">
                                <a href="#" class="stepper-button stepper-down">-</a>
                                <input type="text" class="form-control" value="4" disabled />
                                <a href="#" class="stepper-button stepper-up">+</a>
                            </div>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Delete</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Save it for later</a>
                        </div>
                    </div>
                </div>
                <!-- * item -->
                        <!-- item -->
                        <div class="card cart-item mb-2">
                            <div class="card-body">
                                <div class="in">
                                    <img src="assets/img/sample/photo/product2.jpg" alt="product" class="imaged">
                                    <div class="text">
                                        <h3 class="title">Spinach</h3>
                                        <p class="detail">1 kg</p>
                                        <strong class="price">$ 8.99</strong>
                                    </div>
                                </div>
                                <div class="cart-item-footer">
                                    <div class="stepper stepper-sm stepper-secondary">
                                        <a href="#" class="stepper-button stepper-down">-</a>
                                        <input type="text" class="form-control" value="1" disabled />
                                        <a href="#" class="stepper-button stepper-up">+</a>
                                    </div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm">Save it for later</a>
                                </div>
                            </div>
                        </div>
                        <!-- * item -->
                <!-- item -->
                <div class="card cart-item mb-2">
                    <div class="card-body">
                        <div class="in">
                            <img src="assets/img/sample/photo/product4.jpg" alt="product" class="imaged">
                            <div class="text">
                                <h3 class="title">Beetroot</h3>
                                <p class="detail">1 kg</p>
                                <strong class="price">$ 42.99</strong>
                            </div>
                        </div>
                        <div class="cart-item-footer">
                            <div class="stepper stepper-sm stepper-secondary">
                                <a href="#" class="stepper-button stepper-down">-</a>
                                <input type="text" class="form-control" value="6" disabled />
                                <a href="#" class="stepper-button stepper-up">+</a>
                            </div>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Delete</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Save it for later</a>
                        </div>
                    </div>
                </div>
                <!-- * item -->
            </div>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="section-title mb-1">Kejar Diskon Hari Ini! <span><a href="#">Lihat Semua</a></span></div>
            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card product-card">
                                <div class="card-body">
                                    <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                                    <h2 class="title">Apple</h2>
                                    <p class="text">1 kg</p>
                                    <div class="price">$ 4.99</div>
                                    <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                                    <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                                    <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                                    <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->
        </div>

        <div class="section mt-3 mb-3">
            <div class="section-title mb-1">Rekomendasi Untuk Anda</div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="card product-card filterDiv Susu-Formula">
                        <div class="card-body">
                            <img src="assets/img/sample/photo/product1.jpg" class="image" alt="product image">
                            <h2 class="title">Apple</h2>
                            <p class="text">1 kg</p>
                            <div class="price">$ 1.50</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
                            <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discount Action Sheet -->
        <div class="offcanvas offcanvas-bottom action-sheet" tabindex="-1" id="actionSheetDiscount">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Masukan Kode Diskon</h5>
            </div>
            <div class="offcanvas-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="form-label" for="discount1">Kode Diskon</label>
                                <input type="text" class="form-control" id="discount1"
                                    placeholder="Masukan kode diskon anda">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">Pakai
                                Diskon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Discount Action Sheet -->


        <!-- Offcanvas Bottom -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvas-bottom">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Ringkasan Belanja</h5>
                <a href="#" class="offcanvas-close" data-bs-dismiss="offcanvas">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </a>
            </div>
            <div class="offcanvas-body mt-1">
                <div class="section">
                    <a href="#" class="btn btn-sm btn-text-secondary btn-block" data-bs-toggle="offcanvas"
                        data-bs-target="#actionSheetDiscount">
                        <ion-icon name="qr-code-outline"></ion-icon>
                        Punya Kode Diskon?
                    </a>
                </div>
                <div class="section full mt-3 mb-1">
                    <div class="card">
                        <ul class="listview flush transparent simple-listview">
                            <li>Subtotal <span class="text-muted">Rp179.000</span></li>
                            <li>Diskon<span class="text-muted">Rp17.000</span></li>
                            <li>Total<span class="text-primary font-weight-bold">Rp162.000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Offcanvas Bottom -->

        @include('parent.shop.elements.cart-bottom')

@endsection