<div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            @yield('title', $page_title ?? '')
        </div>
        <div class="right">
            <a href="{{ url('/account') }}" class="headerButton">
                <ion-icon name="person-outline"></ion-icon>
            </a>
        </div>
    </div>