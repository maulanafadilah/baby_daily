{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')
@include('parent.shop.elements.umkm-header')
@include('parent.shop.elements.umkm-search')

        <ul class="listview image-listview media mb-2" id="myUL">
            @foreach($seller as $item)
            <li>
                <a href="/store/{{$item->id}}" class="item">
                    <div class="imageWrapper">
                        <img src="{{asset('img/profile/'.$item->foto_penjual)}}" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            {{$item->nama_toko}}
                            <div class="text-muted">{{$item->kabupaten}}</div>
                        </div>
                    </div>
                </a>
            </li>
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