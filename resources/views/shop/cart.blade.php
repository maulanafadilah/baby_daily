
{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

@include('shop.elements.cart-header')

<div class="section mt-2">
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

        <div class="section">
            <a href="#" class="btn btn-sm btn-text-secondary btn-block" data-bs-toggle="offcanvas"
                data-bs-target="#actionSheetDiscount">
                <ion-icon name="qr-code-outline"></ion-icon>
                Have a discount code?
            </a>
        </div>

        <!-- Discount Action Sheet -->
        <div class="offcanvas offcanvas-bottom action-sheet" tabindex="-1" id="actionSheetDiscount">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Enter Discount Code</h5>
            </div>
            <div class="offcanvas-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="form-label" for="discount1">Discount Code</label>
                                <input type="text" class="form-control" id="discount1"
                                    placeholder="Enter your discount code">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">Apply
                                Discount</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Discount Action Sheet -->

        <div class="section mt-2 mb-2">
            <div class="card">
                <ul class="listview flush transparent simple-listview">
                    <li>Items <span class="text-muted">$ 54.20</span></li>
                    <li>Shipping <span class="text-muted">$ 2.90</span></li>
                    <li>Tax (10%)<span class="text-muted">$ 5.70</span></li>
                    <li>Total<span class="text-primary font-weight-bold">$ 62.80</span></li>
                </ul>
            </div>
        </div>

        <div class="section mb-2">
            <a href="#" class="btn btn-primary btn-block ">Order Now</a>

        </div>


@endsection