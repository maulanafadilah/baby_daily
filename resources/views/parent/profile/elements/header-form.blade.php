<div class="appHeader">
        <div class="left">
        <a href="#" class="headerButton goBack text-primary">
                <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        </div>
        <div class="pageTitle">
            @yield('title', $page_title ?? '')
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="help-circle-outline" class="text-primary"></ion-icon>
            </a>            
        </div>
    </div>