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