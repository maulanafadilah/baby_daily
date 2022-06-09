    <div class="appHeader scrolled">
        <div class="left">
            <a href="{{ url('/') }}" class="headerButton goBack text-primary">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="opacity: 100%;">
            <form class="search-form" action="/product">
                <div class="form-group searchbox">
                    <input type="text" class="form-control" id="myInput" name="search" placeholder="Cari...">
                    <i class="input-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </i>
                </div>
            </form>
        </div>
        <div class="right ">
            <a href="{{ url('/account') }}" class="headerButton">
                <ion-icon name="person-outline"></ion-icon>
            </a>
        </div>
    </div>