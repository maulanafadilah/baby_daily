<div class="appBottomMenu">
        <div class="item">
            <div class="col-2">
                @auth
                    @if($wishlist == false)
                        @foreach ($product_detail as $item)
                        <form method="post" action="/wishlist/">
                            @csrf
                            <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                            <input type="hidden" name="id_produk" value="{{$item->id}}">
                            <input type="hidden" name="id_pengguna" value="{{auth()->user()->id}}">

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
                    <button type="submit" class="btn btn-outline-secondary btn-icon" onclick="window.location.href='/login'">
                        <ion-icon name="heart-outline" class="text-secondary"></ion-icon></ion-icon>
                    </button>
                @endguest
            </div>
            <div class="col-10">
                <a href="#" class="btn btn-primary" style="width: 100%;">
                    <div class="col-2">
                        <ion-icon name="logo-whatsapp" class="text-light"></ion-icon>
                    </div>
                    <div class="col">
                        Whatsapp
                    </div>
                </a>
            </div>
        </div>
</div>