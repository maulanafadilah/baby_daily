{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-wishlist')
@include('parent.shop.elements.mitra-bottom')
@include('parent.shop.elements.umkm-search')

<div class="section mt-3">
            @foreach($wishlist as $item)
                <div class="card cart-item mb-2">
                    <div class="card-body" id="myUL">
                        <div class="in" onclick="window.location.href='/product/{{$item->id}}'">
                            <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_64,ar_1:1,c_fill,g_auto/{{$item->cover}}" alt="image" class="imaged w64">
                            <div class="text">
                                <h3 class="title">{{$item->nama_produk}}</h3>
                                <strong class="price">Rp{{$item->harga}}</strong>
                            </div>
                        </div>
                        <div class="cart-item-footer">
                            <form method="post" action="/wishlist/{{$item->idw}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>
                            <!-- <a href="#" class="btn btn-outline-secondary btn-sm">+ Keranjang</a> -->
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>

        <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endsection