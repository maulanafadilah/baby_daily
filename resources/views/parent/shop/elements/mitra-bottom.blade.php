            <div class="appBottomMenu">
                <a href="{{ url('/') }}" class="item {{ (request()->is('/')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="home-outline"></ion-icon>
                        <strong>Beranda</strong>
                    </div>
                </a>
                <a href="{{ url('/kms') }}" class="item {{ (request()->is('kms*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="albums-outline"></ion-icon>
                        <strong>KMS</strong>
                    </div>
                </a>
                <a href="{{ url('/wishlist') }}" class="item {{ (request()->is('wishlist*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="heart-outline"></ion-icon>
                        <strong>Favorite</strong>
                    </div>
                </a>
            </div>