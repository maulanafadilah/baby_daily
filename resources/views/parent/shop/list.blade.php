{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')
@include('parent.shop.elements.umkm-header')
@include('parent.shop.elements.umkm-search')

        <ul class="listview image-listview media mb-2" id="myUL">
            @foreach($seller as $item)
                @if($item->foto_penjual == true)
                <li>
                    <a href="/store/{{$item->id}}" class="item">
                        <div class="imageWrapper">
                        <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_64,c_fill,ar_1:1,g_auto,r_max/{{$item->foto_penjual}}" alt="foto_profile">
                        </div>
                        <div class="in">
                            <div>
                                {{$item->nama_toko}}
                                <div class="text-muted">{{$item->kabupaten}}</div>
                            </div>
                        </div>
                    </a>
                </li>
                @else
                <li>
                    <a href="/store/{{$item->id}}" class="item">
                        <div class="imageWrapper">
                        <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="foto_profile" class="imaged w64 square">
                        </div>
                        <div class="in">
                            <div>
                                {{$item->nama_toko}}
                                <div class="text-muted">{{$item->kabupaten}}</div>
                            </div>
                        </div>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>


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