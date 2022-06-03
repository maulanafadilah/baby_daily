            <div class="appBottomMenu">
            <a href="{{ url('/mitra') }}" class="item {{ (request()->is('mitra*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="bag-check-outline"></ion-icon>
                        <strong>Beranda</strong>
                    </div>
                </a>
                <a href="{{ url('/wishlist') }}" class="item {{ (request()->is('wishlist*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="heart-outline"></ion-icon>
                        <strong>Favorite</strong>
                    </div>
                </a>
                <!-- <a href="{{ url('/account') }}" class="item {{ (request()->is('account*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="person-outline"></ion-icon>
                        <strong>Akun</strong>
                    </div>
                </a> -->
            </div>