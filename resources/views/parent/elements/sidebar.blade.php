<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
        <div class="offcanvas-body">
            <!-- profile box -->
            <div class="profileBox">
                <div class="image-wrapper">
                @if($biodata == true)
                    <img src="https://res.cloudinary.com/baby-daily-indonesia/image/upload/w_48,c_fill,ar_1:1,g_auto,r_max/{{$biodata->foto_orangtua}}" alt="foto_profile">
                @else
                    <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="image" class="imaged rounded">
                @endif
                </div>
                <div class="in">
                    <strong>{{auth()->user()->nama_lengkap}}</strong>
                    <div class="text-muted">
                        <ion-icon name="star-outline"></ion-icon>
                        Member Bronze
                    </div>
                </div>
                <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class="listview flush transparent no-line image-listview mt-2">
                <li>
                    <a href="/account" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="at-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Akun
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="map-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Alamat
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="receipt-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Daftar Transaksi</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Ulasan</div>
                            <span class="badge badge-danger">5</span>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="listview-title mt-2 mb-1">
                <span>Lainnya</span>
            </div>
            <ul class="listview image-listview flush transparent no-line">
                <li>
                    <a href="#" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="help-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Pusat Bantaun</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="information-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Tentang Baby Daily</div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Mode Malam</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                                <label class="form-check-label" for="darkmodesidebar"></label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            
        </div>
        <!-- sidebar buttons -->
        <div class="sidebar-buttons d-flex justify-content-center">
            <!-- <a href="#" class="button">
                <ion-icon name="person-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="archive-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="settings-outline"></ion-icon>
            </a> -->
            <form action="/logout" method="post">
            @csrf
            <!-- <a class="button" type="submit"> -->
                <button type="submit" class="btn btn-text-danger btn-lg">
                <ion-icon name="log-out-outline" class="text-danger"></ion-icon>
                
                <h4 class="pt-1 ps-1 text-danger" >Keluar</h4>
                </button>
            <!-- </a> -->
            </form>
        </div>
        <!-- * sidebar buttons -->
    </div>