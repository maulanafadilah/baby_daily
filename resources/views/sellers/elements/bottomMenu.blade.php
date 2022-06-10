            <div class="appBottomMenu">
                <a href="{{ url('/home') }}" class="item {{ (request()->is('home*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="home-outline"></ion-icon>
                        <strong>Beranda</strong>
                    </div>
                </a>
                <a href="{{ url('/sellerproducts') }}" class="item {{ (request()->is('sellerproducts*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="cube-outline"></ion-icon>
                        <strong>Produk</strong>
                    </div>
                </a>
                <a href="{{ url('/profile') }}" class="item {{ (request()->is('profile*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="albums-outline"></ion-icon>
                        <strong>Toko</strong>
                    </div>
                </a>
            </div>