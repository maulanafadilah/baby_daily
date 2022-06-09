<div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack text-primary">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <form class="search-form" action="/product">
                <div class="form-group searchbox">
                    <input type="text" class="form-control" id="myInput" name="search" value="{{request('search')}}" placeholder="Cari..">
                    <i class="input-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </i>
                </div>
            </form>
        </div>
        <div class="right ">
            <a href="/keranjang" class="headerButton">
                <ion-icon name="cart-outline" class="text-primary"></ion-icon>
            </a>
        </div>
    </div>