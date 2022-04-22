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

        <!-- List Produk -->
        <div class="section mt-4 mb-3">
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