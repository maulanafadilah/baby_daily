{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.product-header')

        @if(session()->has('success'))
            <!-- <li>
                <a href="#" onclick="toastbox('toast-12', 2000)">
                </a>
            </li> -->

            <div id="toast-12" class="toast-box toast-center show">
                <div class="in">
                    <div class="text">
                    {{ session('success') }}
                    </div>
                </div>
            </div>

            <script>
                setTimeout(() => {
                closeToastBox('toast-12')
                }, 2000);
            </script>
        @endif
        
        <!-- carousel full -->
        <div class="carousel-full splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($productimage as $item)
                    <li class="splide__slide">
                        <img src="{{ asset('img/products/'.$item->gambar) }}" alt="alt" class="imaged w-100 square">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- * carousel full -->

        @foreach($product_detail as $item)
        <div class="section full">
            <div class="wide-block pt-2 pb-2 product-detail-header">
                <div class="rate-block mb-1">
                    <ion-icon name="star" class="active"></ion-icon>
                    <ion-icon name="star" class="active"></ion-icon>
                    <ion-icon name="star" class="active"></ion-icon>
                    <ion-icon name="star" class="active"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <h1 class="title mt-2">{{$item->nama_produk}}</h1>
                <h4 class="mt-1 text-secondary">Stok: {{$item->stok}}</h4>
                <!-- <div class="text">1 kg - Packed</div> -->
                <div class="detail-footer">
                    <!-- price -->
                    <div class="price">
                        <!-- <div class="old-price">$ 74.99</div> -->
                        <div class="current-price">Rp{{$item->harga}}</div>
                    </div>
                    <!-- * price -->
                    @if($seller_tag->tag == '1')
                        <div class="amount">
                            @auth
                                @if($wishlist == false)
                                    @foreach ($product_detail as $item)
                                    <form method="post" action="{{ url('/wishlist/') }}">
                                        @csrf
                                        <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                        <input type="hidden" name="id_produk" value="{{$item->id}}">

                                        <button type="submit" class="btn btn-outline-secondary btn-icon">
                                        <ion-icon name="heart-outline" class="text-secondary"></ion-icon></ion-icon>
                                        </button>
                                    </form>
                                    @endforeach             
                                @else
                                    
                                    <form method="post" action="/wishlist/{{$wishlist->id}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-icon">
                                            <ion-icon name="heart" class="text-danger"></ion-icon>
                                        </button>
                                    </form>
                                    
                                @endif
                            @endauth
                            @guest
                                <button class="btn btn-outline-secondary btn-icon" onclick="window.location.href='/login'">
                                    <ion-icon name="heart-outline" class="text-secondary"></ion-icon>
                                </button>
                            @endguest
                        </div>
                    @elseif($seller_tag->tag == '2')
                        <div class="amount">
                                <button class="btn btn-outline-secondary btn-icon">
                                    <ion-icon name="share-social-outline"></ion-icon>
                                    <!-- <label for="">Bagikan</label> -->
                                </button>
                        </div>
                    @endif
                    <!-- amount -->
                    <!-- <div class="amount">
                        <div class="stepper stepper-secondary">
                            <a href="#" class="stepper-button stepper-down">-</a>
                            <input type="text" class="form-control" value="1" disabled />
                            <a href="#" class="stepper-button stepper-up">+</a>
                        </div>
                    </div> -->
                    <!-- * amount -->
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="wide-block pt-2 pb-2">
                <div class="profile-head">
                    <div class="avatar">
                        <img src="{{ asset('img/profile/'.$item->foto_penjual) }}" alt="avatar" class="imaged w64 rounded">
                    </div>
                    <div class="in">
                        <a href="/store/{{$item->id_penjual}}"><h3 class="name">{{$item->nama_toko}}</h3></a>
                        <h5 class="subtext">{{$item->kabupaten}}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="section-title">Detail Produk</div>
            <ul class="listview simple-listview">
                <li>
                    <div class="col text-secondary">
                        Kategori
                    </div>
                    <div class="col">
                    {{$item->id_kategori}}
                    </div>
                </li>
                <li>
                    <div class="col text-secondary">
                        Brand
                    </div>
                    <div class="col">
                    {{$item->brand}}
                    </div>
                </li>
                <li>
                    <div class="col text-secondary">
                        Stok
                    </div>
                    <div class="col">
                    {{$item->stok}}
                    </div>
                </li>
            </ul>
            <div class="wide-block pt-2 pb-2">
            {{$item->deskripsi}}
            </div>

        </div>
        
        @endforeach


        <!-- Review -->
        <div class="section full mt-2">
            <div class="section-title">Ulasan (2)</div>
            <div class="wide-block pt-2 pb-2">
                <!-- comment block -->
                <div class="comment-block">
                    <!--item -->
                    <div class="item">
                        <div class="avatar">
                            <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="avatar" class="imaged w32 rounded">
                        </div>
                        <div class="in">
                            <div class="comment-header">
                                <h4 class="title">Diego Morata</h4>
                                <span class="time">just now</span>
                            </div>
                            <div class="rate-block mb-1 mt-05">
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="comment-footer">
                                <a href="#" class="comment-button">
                                    <ion-icon name="happy-outline"></ion-icon>
                                    Helpful (523)
                                </a>
                                <a href="#" class="comment-button">
                                    <ion-icon name="flag-outline"></ion-icon>
                                    Report
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!--item -->
                    <div class="item">
                        <div class="avatar">
                            <img src="{{asset('assets/img/sample/avatar/avatar4.jpg')}}" alt="avatar" class="imaged w32 rounded">
                        </div>
                        <div class="in">
                            <div class="comment-header">
                                <h4 class="title">Carmelita Marsham</h4>
                                <span class="time">Sep 23, 2020</span>
                            </div>
                            <div class="rate-block mb-1 mt-05">
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                                <ion-icon name="star" class="active"></ion-icon>
                            </div>
                            <div class="text">
                                Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                dolor
                                sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                odio,
                                dapibus in felis vel, lobortis iaculis quam.
                            </div>
                            <div class="comment-footer">
                                <a href="#" class="comment-button">
                                    <ion-icon name="happy-outline"></ion-icon>
                                    Helpful (43)
                                </a>
                                <a href="#" class="comment-button">
                                    <ion-icon name="flag-outline"></ion-icon>
                                    Report
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- * item -->
                </div>
                <!-- * comment block -->
                <div class="divider mt-3 mb-2"></div>
                <a href="#" class="btn btn-block btn-outline-primary">Lihat Semua</a>
            </div>
        </div>
        <!-- * Review -->



        <div class="section full mt-2 mb-3">
            <div class="section-title mb-1">Produk Terkait</div>


            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($product_related as $item)
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="{{ asset('img/products/'.$item->gambar) }}" class="image" alt="product image"  onclick="window.location.href='/product/{{$item->id_produk}}'">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id_produk}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id_produk}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>


        @if($seller_tag->tag == '1')
            @include('parent.shop.elements.product-bottom')
        @elseif($seller_tag->tag == '2')
            @include('parent.shop.elements.product-mitra-bottom')
        @endif

@endsection