            <div class="appHeader bg-primary text-light">
                <div class="left">
                    <a href="@yield('h_back', $h_back ?? '#')" class="headerButton">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </a>
                </div>
                <div class="pageTitle">{{ $page_title }}</div>
                <div class="right">
                    <a href="#" class="headerButton">
                        <span class="btn btn-success">Simpan</span>
                    </a>
                </div>
            </div>