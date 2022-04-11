<div class="appHeader bg-primary text-light">
                <div class="left">
                    <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                        <ion-icon name="menu-outline"></ion-icon>
                    </a>
                </div>
                <div class="pageTitle">{{ $page_title }}</div>
                <div class="right">
                    <a href="@yield('link1', $link1 ?? '#')" class="headerButton">
                        <ion-icon name="@yield('icon1', $icon1 ?? '')"></ion-icon>
                    </a>
                    <a href="@yield('link2', $link2 ?? '#')" class="headerButton">
                        <ion-icon name="@yield('icon2', $icon2 ?? '')"></ion-icon>
                    </a>
                </div>
            </div>