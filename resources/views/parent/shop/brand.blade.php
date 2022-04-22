{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')
@include('parent.shop.elements.brand-extraHeader')

<div class="tab-content mt-1">
            <!-- pilled tab -->
            <div class="tab-pane fade show active" id="pilled" role="tabpanel">

            <div class="section mt-2 mb-3">
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Mamy poko</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Dancow</h4>
                    </div>
                    <div class="col text-center">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w86">
                        <h4 class="mt-1">Hilo</h4>
                    </div>
                </div>
                
            </div>

            </div>

            <div class="tab-pane fade" id="lined" role="tabpanel">

                <div class="section full mt-1">
                    <div class="section-title">Lined Tabs</div>
                    <div class="wide-block pb-2">

                        <ul class="nav nav-tabs lined" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home11" role="tab">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile12" role="tab">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#contact13" role="tab">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="home11" role="tabpanel">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate enim sed elit
                                consequat, sed ultricies ligula venenatis. In nec arcu eget neque sodales accumsan vel
                                et neque.
                            </div>
                            <div class="tab-pane fade" id="profile12" role="tabpanel">
                                Suspendisse maximus ligula eu ligula iaculis, eu bibendum odio dignissim. Pellentesque
                                elementum nisl elit, non feugiat risus luctus sit amet.
                            </div>
                            <div class="tab-pane fade" id="contact13" role="tabpanel">
                                Vestibulum sed facilisis diam, vel sodales leo. Aenean lacinia, nisi sit amet iaculis
                                maximus, nibh orci iaculis risus, vitae faucibus dui orci quis elit.
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section full mt-2 mb-2">
                    <div class="section-title">Using with Icons</div>
                    <div class="wide-block pt-2 pb-2">

                        <ul class="nav nav-tabs lined" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#example1a" role="tab">
                                    <ion-icon name="home"></ion-icon>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example2a" role="tab">
                                    <ion-icon name="person-circle"></ion-icon>
                                    Profile
                                </a>
                            </li>
                        </ul>

                        <br>

                        <ul class="nav nav-tabs lined" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#example1b" role="tab">
                                    <ion-icon name="home"></ion-icon>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example2b" role="tab">
                                    <ion-icon name="person-circle"></ion-icon>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example3b" role="tab">
                                    <ion-icon name="call"></ion-icon>
                                    Contact
                                </a>
                            </li>
                        </ul>

                        <br>

                        <ul class="nav nav-tabs lined" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#example1b" role="tab">
                                    <ion-icon name="home"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example2b" role="tab">
                                    <ion-icon name="person-circle"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example3b" role="tab">
                                    <ion-icon name="call"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example4b" role="tab">
                                    <ion-icon name="pin"></ion-icon>
                                </a>
                            </li>
                        </ul>

                        <br>

                        <ul class="nav nav-tabs lined iconed" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#example1b" role="tab">
                                    <ion-icon name="home"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example2b" role="tab">
                                    <ion-icon name="person-circle"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example3b" role="tab">
                                    <ion-icon name="call"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#example4b" role="tab">
                                    <ion-icon name="pin"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
</div>
@endsection