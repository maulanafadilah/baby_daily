{{-- Extends layout --}}
@extends('sellers.layout.default')

@section('style')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endsection

{{-- Content --}}
@section('content')
<div class="header-large-title">
    <h1 class="title">Tambah Produk</h1>
</div>

<div class="section full mt-2 mb-2">
    <div class="wide-block pb-2 pt-2">
        <form action="{{ route('sellerproducts.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="form-label" for="fileUpload1">Upload Gambar</label>
            <div class="custom-file-upload" id="fileUpload1">
                <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" name="gambar[]" multiple>
                <label for="fileuploadInput">
                    <span>
                        <strong>
                            <ion-icon name="cloud-upload-outline"></ion-icon>
                            <i>Klik Disini Untuk Upload</i>
                        </strong>
                    </span>
                </label>
                @error('gambar')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed mt-2">
                <div class="input-wrapper">
                    <label class="form-label" for="namaproduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaproduk" placeholder="Masukkan Nama Produk" name="nama_produk">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('nama_produk')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="harga">Harga Produk</label>
                    <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga Produk" name="harga">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('harga')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="brand">Brand Produk</label>
                    <input type="text" class="form-control" id="brand" placeholder="Masukkan Brand Produk" name="brand">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('brand')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select @error('id_kategori') is-invalid @enderror" aria-label="Default select example" name="id_kategori" id="kategori">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_kategori')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="stok">Stok Produk</label>
                    <input type="number" class="form-control" id="stok" placeholder="Masukkan Jumlah Stok Produk" name="stok">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('stok')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="deskripsi">Deskripsi Produk</label>
                    <textarea id="deskripsi" rows="2" class="form-control" name="deskripsi"></textarea>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('deskripsi')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="tokped">Link Toko Pedia (optional)</label>
                    <input type="text" class="form-control" id="tokped" placeholder="Masukkan Link Toko Pedia" name="link_tokped">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('link_tokped')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="shopee">Link Shopee (optional)</label>
                    <input type="text" class="form-control" id="shopee" placeholder="Masukkan Link Shopee" name="link_shopee">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('link_shopee')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="bukalapak">Link Bukalapak (optional)</label>
                    <input type="text" class="form-control" id="bukalapak" placeholder="Masukkan Link Bukalapak" name="link_buka">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('link_buka')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection

{{-- extention --}}
@section('extention')
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endsection