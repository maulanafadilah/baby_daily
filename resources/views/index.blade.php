{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

        <div class="header-large-title">
            <h1 class="title">KMS Digital</h1>
            <h4 class="subtitle">Selamat Datang Maulana</h4>
        </div>

        <div class="section full mt-3 mb-3">

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d1.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Progressive web app ready</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Reusable components</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d3.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Great for phones & tablets</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Change the styles in sass</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d6.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Sketch source file included</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d7.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">RTL (Right to Left) Support</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="assets/img/sample/photo/d5.jpg" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Written with a code structure</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodecontent">
                        <label class="form-check-label" for="darkmodecontent"></label>
                    </div>

                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="assets/img/sample/photo/wide4.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Discover</h6>
                    <h5 class="card-title">Components</h5>
                    <p class="card-text">
                        Reusable components designed for the mobile interface and ready to use.
                    </p>
                    <a href="app-components.html" class="btn btn-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="assets/img/sample/photo/wide2.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Discover</h6>
                    <h5 class="card-title">Pages</h5>
                    <p class="card-text">
                        Mobilekit comes with basic pages you may need and use in your projects easily.
                    </p>
                    <a href="app-pages.html" class="btn btn-primary">
                        <ion-icon name="layers-outline"></ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>

@endsection