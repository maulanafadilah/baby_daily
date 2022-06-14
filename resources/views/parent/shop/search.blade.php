{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')
@include('parent.shop.elements.product-header')
        <div class="section mt-2 mb-3">
        <div class="section-title">Menampilkan: "{{request('search')}}" <span class="text-primary">( {{$count}} )</span> </div>
            <div class="infinite-scroll">
            <div class="row mt-1">
                @foreach ($result as $item)
                <div class="col-6 mt-2">
                    <div class="card product-card" onclick="window.location.href='/product/{{$item->id}}'">
                        <div class="card-body">
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
            {{$result->links()}}
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