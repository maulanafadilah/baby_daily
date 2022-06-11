<div class="appHeader">
    <div class="left">
        @if($header_title == 'Catatan Toko')
        <a href="{{ url('/profile') }}" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        @elseif($header_title == 'Photo Produk')
        <a href="{{ url('/sellerproducts') }}" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        @elseif($header_title == 'Profile Toko')
        <a href="{{ url('/profile') }}" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        @else
        <a href="javascript:window.history.go(-1);" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
        @endif
    </div>
    <div class="pageTitle">{{ $header_title }}</div>
</div>