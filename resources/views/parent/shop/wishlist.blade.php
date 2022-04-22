{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.wishlist-header')
<div class="section">
            <div class="section-title mt-1 mb-1">Semua (6)</div>
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
                            <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
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
                                    <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
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
                            <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <!-- * item -->
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
                            <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
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
                                    <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
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
                            <a href="#" class="btn btn-outline-secondary btn-sm">Hapus</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                <!-- * item -->
        </div>

@endsection