{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section mt-1">
        <h1>Profile Seller</h1>
    </div>
    <div class="section mt-1 mb-5">
        <form action="{{ route('profile.store')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="nama_toko">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('nama_toko')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="alamat">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('provinsi')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kabupaten">Kota/Kabupaten</label>
                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('kabupaten')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('kecamatan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kelurahan">Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('kelurahan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('alamat')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kode_pos">Kode Pos</label>
                    <input type="number" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos Toko">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('kode_pos')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="tag">Jenis Kemitraan</label>
                    <select class="form-select @error('tag') is-invalid @enderror" aria-label="Default select example" name="tag" id="tag">
                        <option>Pilih..</option>
                        <option value="1">Non Mitra</option>
                        <option value="2">Mitra</option>
                    </select>
                </div>
                @error('tag')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-button-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Buat</button>
            </div>

        </form>
    </div>
</div>

@endsection