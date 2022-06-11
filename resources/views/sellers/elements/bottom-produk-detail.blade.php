<div class="section full mt-2">
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <div class="col pe-1">
            <button type="button" class="btn btn-success" style="width: 100%;" data-bs-toggle="offcanvas" data-bs-target="#lainnya">Edit</button>
        </div>
        <div class="col">
            <form action="{{ route('sellerproducts.destroy',$products->id) }}" method="post">
                @csrf
                @method('DELETE')
                <Button type="submit" class="btn btn-outline-danger" style="width: 100%;">Delete</Button>
            </form>
        </div>
    </div>
    <!-- * App Bottom Menu -->
</div>

<div class="offcanvas offcanvas-bottom action-sheet inset" tabindex="-1" id="lainnya">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Lainnya</h5>
    </div>
    <div class="offcanvas-body">
        <ul class="action-button-list">
            <li>
                <a href="{{ route('sellerproducts.edit',$products->id) }}" class="btn btn-list">
                    <span>
                        <ion-icon name="logo-"></ion-icon>
                        Edit Detail Produk
                    </span>
                </a>
            </li>
            <!-- <li>
                <a href="#" class="btn btn-list" data-bs-toggle="modal" data-bs-target="#ModalForm" data-bs-dismiss="offcanvas">
                    <span>
                        <ion-icon name="logo-"></ion-icon>
                        Edit Detail Produk
                    </span>
                </a>
            </li> -->
            <li>
                <a href="{{ route('images.show',$products->id) }}" class="btn btn-list">
                    <span>
                        <ion-icon name="logo-"></ion-icon>
                        Edit Photo Produk
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>