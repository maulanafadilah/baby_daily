{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        @foreach($seller_detail as $item)
        <div class="section mt-2">
            <div class="profile-head">
                <div class="avatar">
                <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_64,c_fill,ar_1:1,g_auto,r_max/{{$item->foto_penjual}}" alt="foto_profile">
                </div>
                <div class="in">
                    <h3 class="name">{{$item->nama_toko}}</h3>
                    <h5 class="subtext">{{$item->kabupaten}}</h5>
                </div>
            </div>
        </div>
        

        <div class="section full mt-2">
            <div class="profile-stats ps-2 pe-2">
                <a href="#" class="item">
                    <strong>4.9</strong>Rating & Ulasan
                </a>
                <a href="#" class="item">
                    <strong>1 jam</strong>Pesan Dibalas
                </a>

                <a href="#" class="item">
                    <strong>{{$item->jam_buka}} - {{$item->jam_tutup}}</strong>Jam Operasi Toko
                </a>
            </div>
        </div>
        @endforeach

        <div class="section mt-2 mb-2">
            <div class="profile-info">
                <div class="link text-center mt-2">
                <a href="https://wa.me/62{{$wa}}" type="button" class="btn btn-outline-success me-1 mb-1 btn-block">Whatsapp</a>
                <button data-bs-toggle="offcanvas" data-bs-target="#actionSheetShare" type="button" class="btn btn-outline-secondary me-1 mb-1 btn-block">Belanja</button>
                </div>
            </div>
        </div>

        <div class="section full">
            <div class="wide-block transparent p-0">
                <ul class="nav nav-tabs lined iconed" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#feed" role="tab">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                            <ion-icon name="information-circle-outline"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class="section full mb-2">
            <div class="tab-content">

                <!-- feed -->
                <div class="tab-pane fade show active" id="feed" role="tabpanel">

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
                    <!-- *Button Menu -->

                    <!-- List Produk -->
                    <div class="section mt-1 mb-3">
                        <div class="infinite-scroll">
                        <div class="row mt-2">
                            @foreach ($product_list as $item)
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
                        {{$product_list->links()}}
                        </div>
                    </div>
                    <!-- *List Produk -->
                    
                </div>
                <!-- * feed -->

                <!-- settings -->
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <ul class="listview image-listview text flush transparent pt-1">
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Informasi Toko</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Catatan Toko</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="in">
                                    <div>Syarat & Ketentuan</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- * settings -->
            </div>
        </div>
        <!-- * tab content -->

        <!-- Share Action Sheet -->
        <div class="offcanvas offcanvas-bottom action-sheet inset" tabindex="-1" id="actionSheetShare">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Belanja</h5>
            </div>
            <div class="offcanvas-body">
            @foreach($seller_detail as $item)
                <ul class="action-button-list">
                    
                    <li>
                        <a target="_blank" href="{{$item->link_tokped}}" class="btn btn-list">
                            <span>
                                <img src="{{asset('img/banner/tokopedia.png')}}" alt="tokopedia" class="imaged w24 me-2">
                                Tokopedia
                            </span>
                        </a>
                    </li>
                   
                    <li>
                        <a target="_blank" href="{{$item->link_shopee}}" class="btn btn-list">
                            <span>
                            <img src="{{asset('img/banner/shopee.png')}}" alt="shopee" class="imaged w24 me-2">
                                Shopee
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a target="_blank" href="{{$item->link_buka}}" class="btn btn-list">
                            <span>
                            <img src="{{asset('img/banner/bukalapak.png')}}" alt="bukalapak" class="imaged w24 me-2">
                                Bukalapak
                            </span>
                        </a>
                    </li>
                   
                </ul>
            @endforeach
            </div>
        </div>
        <!-- * Share Action Sheet -->

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