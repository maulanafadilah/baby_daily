<div class="appHeader bg-primary text-light">
                <div class="left">
                    <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                        <ion-icon name="menu-outline"></ion-icon>
                    </a>
                </div>
                <div class="pageTitle">{{ $page_title }}</div>
                <div class="right">
                    <a href="@yield('hl_btn1', $hl_btn1 ?? '#')" class="headerButton">
                        <ion-icon name="@yield('h_btn1', $h_btn1 ?? '')"></ion-icon>
                    </a>
                    <a href="@yield('hl_btn2', $hl_btn2 ?? '#')" class="headerButton">
                        <ion-icon name="@yield('h_btn2', $h_btn2 ?? '')"></ion-icon>
                    </a>
                </div>
            </div>