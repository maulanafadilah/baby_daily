    <div class="appHeader">
        <div class="left">
        <a href="/" class="headerButton goBack text-primary">
                <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        </div>
        <div class="pageTitle">
            @yield('title', $page_title ?? '')
        </div>
        <div class="right">
        <a href="/wishlist" class="headerButton text-primary">
                        <ion-icon name="heart-outline"></ion-icon>
                    </a>
            <a href="#" class="headerButton toggle-searchbox text-primary">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>