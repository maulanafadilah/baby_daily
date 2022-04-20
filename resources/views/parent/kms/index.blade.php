{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

@include('parent.kms.elements.index-header')

        <div class="section full">
            <div class="section-title mb-1">Balita (3)</div>
            <div class="wide-block pt-2 pb-3">
                
                    <div class="card">
                        <div class="row align-items-center card-body d-flex" onclick="window.location.href='/kms_show'">
                            <div class="col-3 text-center">
                                <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            </div>
                            <div class="col-7 align-self-center">
                                <h3 class="mb-0 d-flex align-items-center justify-content-between">
                                    Ismawati Oktavia
                                </h3>
                                <h5 class="card-subtitle pt-1" style="text-transform: none;">Usia: 12 Bulan</h5>
                            </div>
                            <div class="col-2 text-center">
                                <ion-icon name="chevron-forward-outline" class="iconedbox d-flex align-items-center"></ion-icon>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="row align-items-center card-body d-flex" onclick="window.location.href='/kms_show'">
                            <div class="col-3 text-center">
                                <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            </div>
                            <div class="col-7 align-self-center">
                                <h3 class="mb-0 d-flex align-items-center justify-content-between">
                                    Lora Kirana
                                </h3>
                                <h5 class="card-subtitle pt-1" style="text-transform: none;">Usia: 12 Bulan</h5>
                            </div>
                            <div class="col-2">
                                <ion-icon name="chevron-forward-outline" class="iconedbox d-flex align-items-center"></ion-icon>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="row align-items-center card-body d-flex" onclick="window.location.href='/kms_show'">
                            <div class="col-3 text-center">
                                <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                            </div>
                            <div class="col-7 align-self-center">
                                <h3 class="mb-0 d-flex align-items-center justify-content-between">
                                    Mayada Zahra
                                </h3>
                                <h5 class="card-subtitle pt-1" style="text-transform: none;">Usia: 12 Bulan</h5>
                            </div>
                            <div class="col-2">
                                <ion-icon name="chevron-forward-outline" class="iconedbox d-flex align-items-center"></ion-icon>
                            </div>

                        </div>
                    </div>
                
            </div>
        </div>

        <div class="section full mt-3">
            <div class="section-title">Penuhi Kebutuhan Anak</div>
            <div class="wide-block pt-3 pb-1 mt-1">
                <div class="row">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                </div>
                <div class="row pe-2 ps-2 mt-2">
                    <button type="button" class="btn btn-outline-success me-1 mb-1">Belanja Sekarang</button>
                </div>
            </div>
        </div>

        <div class="section mt-4 mb-4">
            <div class="card">
                <img src="assets/img/sample/photo/wide3.jpg" class="card-img overlay-img single-banner" alt="image">
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="section-title mb-1">Produk Terkait</div>
            <div class="row mt-1">
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
            <div class="row pe-1 ps-1 mt-4">
                    <button type="button" class="btn btn-outline-primary shadowed me-1 mb-1">Tampilkan Lebih Banyak</button>
                </div>
        </div>
@endsection