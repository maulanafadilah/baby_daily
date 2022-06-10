<!-- App Header -->
<div class="appHeader bg-primary scrolled">
    <div class="left">
        <a href="javascript:window.history.go(-1);" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">{{ $header_title }}</div>
    @if($search == 'seller_product')
    <div class="right">
        <a href="#" class="headerButton toggle-searchbox">
            <ion-icon name="search-outline"></ion-icon>
        </a>
    </div>
    @endif
</div>
<!-- * App Header -->