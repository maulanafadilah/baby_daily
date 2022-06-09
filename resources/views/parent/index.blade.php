{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
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

        <!-- Slider -->
        <div class="section full mt-2 mb-3">
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="img/banner/promo1.jpeg" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="img/banner/promo2.jpeg" alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide">
                            <img src="img/banner/promo3.jpeg" alt="alt" class="imaged w-100">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *Slider -->

        <!-- Kategori -->
        <div class="section full mt-3">
            <!-- <div class="section-title">Kategori</div> -->
            <div class="wide-block pt-1 pb-1 bg-transparent">
                <div class="row">
                    @foreach ($category_old as $item)
                    <div class="col d-block text-center" onclick="window.location.href='/category/{{$item->slug}}'">
                       
                            <img src="img/banner/{{$item->icon}}" alt="" class="imaged w36">
                        
                        <h4 class="mt-1">{{$item->nama_kategori}}</h4>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    @foreach ($category_new as $item)
                    <div class="col d-block text-center" onclick="window.location.href='/category/{{$item->slug}}'">
                        
                    <img src="img/banner/{{$item->icon}}" alt="" class="imaged w36">
                        <h4 class="mt-1">{{$item->nama_kategori}}</h4>
                    </div>
                    @endforeach
                    <div class="col d-block text-center">
                        <img src="img/banner/house.png" alt="" class="imaged w36" data-bs-toggle="modal" data-bs-target="#ModalListview">
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
                                    <img src="img/banner/{{$item->icon}}" alt="image" class="image">
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
        <div class="section full mt-1">
            <div class="section-title">Informasi</div>
            <div class="wide-block bg-transparent">
                <div class="row mt-1">
                    <div class="col">
                        <div class="card card-information">
                            <img src="img/banner/info1.jpeg" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-information">
                            <img src="img/banner/info2.jpeg" class=" card-img overlay-img" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *Informasi -->

        <!-- Promo Hari Ini -->
        <!-- <div class="section full mt-3">
            <div class="section-title">Promo Hari Ini <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" style="background: transparent; box-shadow: none">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center" onclick="window.location.href='/promotion'">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- *Promo Hari Ini -->

        <!-- Terlaris -->
        <div class="section mt-3">
            <div class="section-title">Lagi Banyak Dicari <span><a href="/promotion">Lihat Semua</a></span></div>
                <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($products_pop as $item)
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="img/products/{{$item->gambar}}" class="image" alt="product image"  onclick="window.location.href='/product/{{$item->id}}'">
                                        <h2 class="title" onclick="window.location.href='/product/{{$item->id}}'">{{$item->nama_produk}}</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product/{{$item->id}}'">Rp{{$item->harga}}</div>
                                        @if($item->tag == '2')
                                        <form method="post" action="/wishlist/">
                                            @csrf
                                            <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                            <input type="hidden" name="id_produk" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-sm btn-primary btn-block">+ Favorite</button>
                                        </form>
                                        @else
                                        <form method="post" action="/cart/">
                                            @csrf
                                            <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                            <input type="hidden" name="id_produk" value="{{$item->id}}">
                                            <input type="hidden" name="kuantitas" value="1">
                                            <button type="submit" class="btn btn-sm btn-primary btn-block">+ Keranjang</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
        <!-- *Terlaris -->

        <!-- Single Banner -->
        <!-- <div class="section mt-5">
            <div class="card">
                <img src="assets/img/sample/photo/wide3.jpg" class="card-img overlay-img single-banner" alt="image" onclick="window.location.href='/information'">
            </div>
        </div> -->
        <!-- #Single Banner -->

        <!-- Brand Pilihan -->
        <!-- <div class="section full mt-3">
            <div class="section-title">Brand Pilihan <span><a href="/brand">Lihat Semua</a></span></div>
            <div class="carousel-small splide mt-1"  style="margin-left: -78px !important; padding-right: -12px !important;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/2.jpg" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/3.jpg" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/4.jpg" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/1.jpg" alt="alt" class="imaged w-100 w64" onclick="window.location.href='/store'">
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- *Brand Pilihan -->

        <!-- Umkm Mitra -->
        <div class="section mt-3">
            <div class="section-title">UMKM Komunitas PKKM<span><a href="mitra/ppkm">Lihat Semua</a></span></div>
            <div class="carousel-multiple splide mt-1">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($seller as $item)
                            <li class="splide__slide" onclick="window.location.href='/store/{{$item->id}}'">
                                <div class="card product-card" style="height: 130px;">
                                    <div class="card-body text-center">
                                        <img src="img/profile/{{$item->foto_penjual}}" class="imaged rounded w64" alt="product image">
                                        <h2 class="title">{{$item->nama_toko}}</h2>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
        <!-- *Umkm Mitra -->
        
        <!-- Seasonal Promotion -->

        <!-- <div class="section full mt-3">
            <div class="section-title">Spesial Ramadhan <span><a href="/promotion">Lihat Semua</a></span></div>
            <div class="wide-block pt-1 pb-1 mt-1" style="border: 0;" style="background: #FBFEFF;">
                <div class="carousel-multiple splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex justify-content-center">
                                <div class="card product-card" style="background: transparent; box-shadow: none">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="assets/img/sample/photo/800x1235.png" alt="alt" class="image d-flex align-items-center" onclick="window.location.href='/promotion'">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <img src="assets/img/sample/photo/product2.jpg" class="image" alt="product image"  onclick="window.location.href='/product'">
                                        <h2 class="title" onclick="window.location.href='/product'">Spinach Lorem Ipsum Dolor Sit</h2>
                                        <div class="price mt-1" onclick="window.location.href='/product'">$ 5.99</div>
                                        <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- *Seasonal Promotion -->

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
            <div class="infinite-scroll">
            <div class="row mt-2 " >
                @foreach ($products_all as $item)
                <div class="col-6 mt-2" id="post-data">
                    <div class="card product-card">
                        <div class="card-body">
                            <img src="img/products/{{$item->gambar}}" class="image" alt="product image" onclick="window.location.href='/product/{{$item->id}}'">
                            <h2 class="title" onclick="window.location.href='/product/{{$item->id}}'">{{$item->nama_produk}}</h2>
                            <div class="price mt-1" onclick="window.location.href='/product/{{$item->id}}'">Rp{{$item->harga}}</div>
                            @if($item->tag == '2')
                            <form method="post" action="/wishlist/">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                <input type="hidden" name="id_produk" value="{{$item->id}}">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">+ Favorite</button>
                            </form>
                            @else
                            <form method="post" action="/cart/">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                <input type="hidden" name="id_produk" value="{{$item->id}}">
                                <input type="hidden" name="kuantitas" value="1">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">+ Keranjang</button>
                            </form>
                            @endif
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

        <!-- Load More -->
        <!-- <div class="ajax-load text-center" style="display: none;">
            <img src="{{asset('img/load.gif')}}">
        </div> -->
        <!-- *Load More -->
        
@endsection