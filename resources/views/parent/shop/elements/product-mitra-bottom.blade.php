<div class="appBottomMenu">
        <div class="item">
            <div class="col-2">
                <button data-bs-toggle="offcanvas" data-bs-target="#actionSheetShare" class="btn btn-outline-secondary btn-icon"><ion-icon name="cart-outline" class="text-secondary"></ion-icon></ion-icon></a>
            </div>
            <div class="col-10">
                @if($wa == true)
                    @foreach ($product_detail as $item)
                    <a href="https://wa.me/62{{$wa}}?text=Saya%20tertarik%20dengan%20produk%20{{$item->nama_produk}}%20yang%20Anda%20jual" class="btn btn-primary" style="width: 100%;">
                        <div class="col-2">
                            <ion-icon name="logo-whatsapp" class="text-light"></ion-icon>
                        </div>
                        <div class="col">
                            Whatsapp
                        </div>
                    </a>
                    @endforeach
                @else
                    <a href="#" class="btn btn-primary" style="width: 100%;">
                        <div class="col-2">
                            <ion-icon name="logo-whatsapp" class="text-light"></ion-icon>
                        </div>
                        <div class="col">
                            Whatsapp
                        </div>
                    </a>
                @endif
                
            </div>
        </div>
</div>