<div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="{{ url('/balita/create') }}" class="headerButton">
                <ion-icon name="add-circle-outline"></ion-icon>
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