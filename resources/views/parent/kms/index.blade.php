{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.kms.elements.index-header')
@include('parent.shop.elements.mitra-bottom')
        
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

        <div class="section full">
            <div class="section-title mt-1 mb-1">Balita</div>
            <div class="wide-block pt-2 pb-3">
                @if(!empty($balita))
                    @foreach ($balita as $item)
                        <div class="card mt-2">
                            <div class="row align-items-center card-body d-flex" onclick="window.location.href='/kms/{{$item->id}}'">
                                <div class="col-3 text-center">
                                    <img src="assets/img/sample/photo/1.jpg" class="imaged rounded w64" alt="product image">
                                </div>
                                <div class="col-7 align-self-center">
                                    <h3 class="mb-0 d-flex align-items-center justify-content-between">
                                        {{$item->nama_lengkap}}
                                    </h3>
                                    <h5 class="card-subtitle pt-1" style="text-transform: none;">Usia: {{$item->usia}} Bulan</h5>
                                </div>
                                <div class="col-2 text-center">
                                    <ion-icon name="chevron-forward-outline" class="iconedbox d-flex align-items-center"></ion-icon>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @elseif($balita == false)
                <div class="card text-center">
                        <div class="card-body p-5">
                            <h6 class="card-title">Anda belum menambahkan data Balita</h6>
                            <p class="card-text">
                                Anda dapat menambahkan data balita <a href="/balita/create">disini</a> atau klik icon + dipojok kiri atas layar anda
                            </p>
                        </div>
                    </div>
				@endif
                

                
            </div>
        </div>

        <!-- <div class="section full mt-3">
            <div class="section-title">Penuhi Kebutuhan Anak</div>
            <div class="wide-block pt-3 pb-1 mt-1">
                <div class="row">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                    <div class="col d-block text-center">
                        <button type="button" class="btn btn-icon btn-primary">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </button>
                        <h4 class="mt-1">Lorem</h4>
                    </div>
                </div>
                <div class="row pe-2 ps-2 mt-2">
                    <button type="button" class="btn btn-outline-success me-1 mb-1">Belanja Sekarang</button>
                </div>
            </div>
        </div> -->

        <div class="section mt-4 mb-4">
            <div class="card">
                <img src="assets/img/sample/photo/wide3.jpg" class="card-img overlay-img single-banner" alt="image">
            </div>
        </div>

        <div class="section mt-2 mb-3">
            <div class="section-title">Produk Terkait</div>
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