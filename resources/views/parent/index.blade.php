{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')
@include('parent.shop.elements.mitra-header')
@include('parent.shop.elements.mitra-bottom')
        @if(session()->has('success'))

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

        <!-- Slider -->
        <div class="section full mt-2 mb-3">
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra1.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra3.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="{{asset('img/banner/mitra2.jpeg')}}" alt="alt" class="imaged w-100">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Slider -->

        <!-- Kategori -->
        <div class="section full mt-4">
            <div class="wide-block pt-1 pb-1 bg-transparent" style="border: 0;">
                <div class="row">
                    @foreach ($category as $item)
                    <div class="col d-block text-center" onclick="window.location.href='/category/{{$item->slug}}'">
                        <img src="{{asset('img/banner/'.$item->icon)}}" alt="" class="imaged w36">
                        <h4 class="mt-1">{{$item->nama_kategori}}</h4>
                    </div>
                    @endforeach
                    <div class="col d-block text-center">
                    <img src="{{asset('img/banner/house.png')}}" alt="" class="imaged w36" data-bs-toggle="modal" data-bs-target="#ModalListview">
                        <h4 class="mt-1">Semua Kategori</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- *Kategori -->
        
        <!-- Modal Kategori -->
        <div class="modal fade modalbox" id="ModalListview" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Semua Kategori</h5>
                        <a href="#" data-bs-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body p-0">

                        <ul class="listview image-listview flush mb-2">
                            @foreach ($category_all as $item)
                            <li>
                                <div class="item" onclick="window.location.href='/category/{{$item->slug}}'">
                                    <img src="{{asset('img/banner/'.$item->icon)}}" alt="image" class="image">
                                    <div class="in">
                                        <div>{{$item->nama_kategori}}</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- * Modal Kategori -->

        <!-- Informasi -->
        <div class="section full">
            <div class="section-title">Informasi</div>
            <div class="wide-block bg-transparent" style="border: 0;">
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('img/banner/info1.jpeg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="{{asset('img/banner/info2.jpeg')}}" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Informasi -->
    
        <!-- UMKM Deals -->
        <div class="section full mt-4">
            <div class="section-title">UMKM Deals!</div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" style="background: transparent; box-shadow: none">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/v1655228406/banners/2_ei1ly2.png" alt="alt" class="image d-flex align-items-center">
                                    </div>
                                </div>
                            </li>

                            @foreach ($products_pop as $item)
                            <li class="splide__slide">
                                <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                                    <div class="card-body">
                                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id_produk}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id_produk}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Favorite</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- *UMKM Deals -->

        <!-- Produk Pilihan -->
        <div class="section mt-3">
            <div class="section-title">Produk Pilihan</div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($products_pop as $item)
                            <li class="splide__slide">
                                <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                                    <div class="card-body">
                                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id_produk}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id_produk}}'">Rp{{$item->harga}}</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Favorite</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <!-- *Produk Pilihan -->

        <div class="section mt-3 mb-3">
            <div class="section-title">Daftar UMKM<span><a href="/umkm">Lihat Semua</a></span></div>
            <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($seller as $item)
                            <li class="splide__slide" onclick="window.location.href='/store/{{$item->id}}'">
                                <div class="card product-card" style="height: 130px;">
                                    <div class="card-body text-center">
                                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_64,c_fill,ar_1:1,g_auto,r_max/{{$item->foto_penjual}}" alt="foto_profile">
                                        <h2 class="title">{{$item->nama_toko}}</h2>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
        
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
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle me-1 mb-1 mt-1 btn-block" type="button" data-bs-toggle="dropdown">
                                    Populer
                                </button>
                            </div>
                        </div>
                    </div>
        </div>

        <!-- List Produk -->
        <div class="section mt-2 mb-3">
            <div class="infinite-scroll">
            <div class="row mt-2 " >
                @foreach ($products_all as $item)
                <div class="col-6 mt-2" id="post-data">
                    <div class="card product-card">
                        <div class="card-body" onclick="window.location.href='/product/{{$item->id}}'">
                            <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                            <h2 class="title" onclick="window.location.href='/product/{{$item->id}}'">{{$item->nama_produk}}</h2>
                            <div class="price mt-1" onclick="window.location.href='/product/{{$item->id}}'">Rp{{$item->harga}}</div>
                            <form method="post" action="{{ url('/wishlist/') }}">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                <input type="hidden" name="id_produk" value="{{$item->id}}">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">+ Favorite</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                {{$products_all->links()}}
            </div>
            
        </div>
        <!-- *List Produk -->

        <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
        </script>

@endsection