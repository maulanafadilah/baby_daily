    <div class="appHeader scrolled">
        <div class="left ms-1">
            <form class="search-form" action="/product">
                <div class="form-group searchbox">
                    <input type="text" class="form-control" id="myInput" name="search" placeholder="Cari...">
                    <i class="input-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </i>
                </div>
            </form>
        </div>
        <div class="right me-2">
            <a href="{{ url('/account') }}" class="headerButton">
                <ion-icon name="person-outline"></ion-icon>
            </a>
        </div>
    </div>