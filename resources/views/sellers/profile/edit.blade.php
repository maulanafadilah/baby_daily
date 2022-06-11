{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')

@switch ($profile)

@case($id == 2)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="col-auto form-group boxed">
            <h4 class="subtitle mt-2">Nomor Whatsapp</h4>
            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
            <div class="input-wrapper">
                <div class="input-group">
                    <div class="input-group-text fs-6">+62</div>
                    <input type="number" class="form-control" id="link_whatsapp" placeholder="Contoh : 821321242312" value="{{ old('link_whatsapp') ?? $profile->link_whatsapp }}" name="link_whatsapp" autofocus>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        @error('link_whatsapp')
        <span class="text-danger">{{ $message }}</span>
        @endif
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 3)
<div class="section full mt-2 mb-2 ">
    <div class="wide-block pb-1 pt-1">
        <form action="{{ route('profile.update',$id) }}" method="POST">
            @method('PUT')
            @csrf
            <ul class="listview image-listview no-line no-space flush">
                <li>
                    <div class="item">
                        <img src="{{ asset('/gambar/bukalapak.jpg') }}" alt="image" class="image">
                        <div class="in">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="lazada">Bukalapak (opsional)</label>
                                    <input type="text" class="form-control" id="lazada" placeholder="Masukkan Disini" name="link_buka" value="{{ old('link_buka') ?? $profile->link_buka }}">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img src="/gambar/shopee.png" alt="image" class="image">
                        <div class="in">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="shopee">Shopee (opsional)</label>
                                    <input type="text" id="shopee" class="form-control" placeholder="Masukkan Disini" name="link_shopee" value="{{ old('link_shopee') ?? $profile->link_shopee }}">
                                    <i class=" clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img src="/gambar/tokped.jpg" alt="image" class="image">
                        <div class="in">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="tokped">Tokopedia (opsional)</label>
                                    <input type="text" class="form-control" id="tokped" placeholder="Masukkan Disini" name="link_tokped" value="{{ old('link_tokped') ?? $profile->link_tokped }}">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
        </form>

    </div>
</div>
@break

@case($id == 4)
<div class="section mt-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Jam Operasional</h5>
            <p class="card-text">Jam Buka : Jam Tutup</p>
        </div>
    </div>
</div>

<button class="btn btn-primary btn-sm mt-2 container" onclick="show()">Ubah Jam Operasional</button>
</div>
<div id="target" style="display: none;" class="mt-2">
    <form action="{{ route('profile.update',$id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col">
                <label class="form-label" for="buka">Jam Buka</label>
                <input type="time" class="form-control" name="jam_buka" id="buka" value="{{ old('jam_buka') ?? $profile->jam_buka }}" step="any">
            </div>
            <div class="col">
                <label class="form-label" for="tutup">Jam Tutup</label>
                <input type="time" class="form-control" name="jam_tutup" id="tutup" value="{{ old('jam_tutup') ?? $profile->jam_tutup }}" step="any">
            </div>
            <button class="btn btn-primary btn-sm mt-2">Ubah Jam Operasional</button>
        </div>
    </form>
</div>
@break

@case($id == 5)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Nama Toko</h4>
                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama Toko" value="{{ old('nama_toko') ?? $profile->nama_toko }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('nama_toko')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 6)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Provinsi</h4>
                <input type="number" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="{{ old('provinsi') ?? $profile->provinsi }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('provinsi')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 7)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Kota/Kabupaten</h4>
                <input type="number" class="form-control" name="kabupaten" id="kabupaten" placeholder="kabupaten" value="{{ old('kabupaten') ?? $profile->kabupaten }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('kabupaten')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 8)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Kecamatan</h4>
                <input type="number" class="form-control" name="kecamatan" id="kecamatan" placeholder="kecamatan" value="{{ old('kecamatan') ?? $profile->kecamatan }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('kecamatan')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 9)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Kelurahan</h4>
                <input type="number" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan" value="{{ old('kelurahan') ?? $profile->kelurahan }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('kelurahan')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 10)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Alamat</h4>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') ?? $profile->alamat }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('alamat')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 11)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group boxed">
            <div class="input-wrapper">
                <h4 class="subtitle mt-2">Kode Pos</h4>
                <input type="number" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="{{ old('kode_pos') ?? $profile->kode_pos }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            @error('kode_pos')
            <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@case($id == 12)
<div class="container">
    <form action="{{ route('profile.update',$id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label class="form-label mt-2" for="fileUpload1">Upload Gambar</label>
        <div class="custom-file-upload" id="fileUpload1">
            <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" name="gambar">
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
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@break

@endswitch
<script>
    function show() {
        var x = document.getElementById("target");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection