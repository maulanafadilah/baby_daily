            <div class="appBottomMenu">
                <a href="{{ url('/') }}" class="item {{ (request()->is('/')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="home-outline"></ion-icon>
                        <strong>Beranda</strong>
                    </div>
                </a>
                <a href="{{ url('/mitra') }}" class="item {{ (request()->is('mitra*')) ? 'active' : '' }}">
                    <div class="col">
                    <ion-icon name="bag-check-outline"></ion-icon>
                        <strong>Mitra</strong>
                    </div>
                </a>
                <a href="{{ url('/kms') }}" class="item {{ (request()->is('kms*')) ? 'active' : '' }}">
                    <div class="col">
                    <ion-icon name="albums-outline"></ion-icon>
                        <strong>KMS</strong>
                    </div>
                </a>
                <a href="{{ url('/artikel') }}" class="item {{ (request()->is('artikel*')) ? 'active' : '' }}">
                    <div class="col">
                        <ion-icon name="book-outline"></ion-icon>
                        <strong>Artikel</strong>
                    </div>
                </a>
            </div>