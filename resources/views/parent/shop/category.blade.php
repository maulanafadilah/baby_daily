{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')

        <div class="section mt-2 mb-3">
            @if($banner == true)
                @foreach($banner as $item)
                <div class="card">
                    <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/{{$item->banner}}" class="card-img overlay-img" alt="image">
                </div>
                @endforeach
            @else
                <div class="card">
                    <img src="{{asset('assets/img/sample/photo/wide1.jpg')}}" class="card-img overlay-img" alt="image">
                </div>
            @endif
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
        <div class="section mt-2 mb-3">
            <div class="infinite-scroll">
            <div class="row mt-2">
                @foreach ($product_list as $item)
                <div class="col-6 mt-2">
                    <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                        <div class="card-body">
                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_1000,ar_1:1,c_fill,g_auto/{{$item->cover}}" class="image" alt="{{$item->nama_produk}}">
                            <h2 class="title">{{$item->nama_produk}}</h2>
                            <div class="price mt-1">Rp{{$item->harga}}</div>
                            <a href="#" class="btn btn-sm btn-primary btn-block">+ Keranjang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$product_list->links()}}
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