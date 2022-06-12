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
                    <select id="provinsi" name="provinsi" data-placeholder="Select" class="custom-select w-100"></select>
                </div>
                @error('provinsi')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kabupaten">Kota/Kabupaten</label>
                    <select id="kabupaten" name="kabupaten" data-placeholder="Select" class="custom-select w-100"></select>
                </div>
                @error('kabupaten')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kecamatan">Kecamatan</label>
                    <select id="kecamatan" name="kecamatan" data-placeholder="Select" class="custom-select w-100"></select>
                </div>
                @error('kecamatan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="kelurahan">Kelurahan</label>
                    <select id="kelurahan" name="kelurahan" data-placeholder="Select" class="custom-select w-100">
                    </select>
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

@push('javascript-internal')
<script>
    $(document).ready(function() {

        //  select province:start
        $('#provinsi').select2({
            allowClear: true,
            ajax: {
                url: "{{ route('provinces.select') }}",
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });
        //  select province:end

        //  Event on change select province:start
        $('#provinsi').change(function() {
            //clear select
            $('#kabupaten').empty();
            $("#kecamatan").empty();
            $("#kelurahan").empty();
            //set id
            let provinceID = $(this).val();
            if (provinceID) {
                $('#kabupaten').select2({
                    allowClear: true,
                    ajax: {
                        url: "{{ route('regencies.select') }}?provinceID=" + provinceID,
                        dataType: 'json',
                        delay: 250,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });
            } else {
                $('#kabupaten').empty();
                $("#kecamatan").empty();
                $("#kelurahan").empty();
            }
        });
        //  Event on change select province:end

        //  Event on change select regency:start
        $('#kabupaten').change(function() {
            //clear select
            $("#kecamatan").empty();
            $("#kelurahan").empty();
            //set id
            let regencyID = $(this).val();
            if (regencyID) {
                $('#kecamatan').select2({
                    allowClear: true,
                    ajax: {
                        url: "{{ route('districts.select') }}?regencyID=" + regencyID,
                        dataType: 'json',
                        delay: 250,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });
            } else {
                $("#kecamatan").empty();
                $("#kelurahan").empty();
            }
        });
        //  Event on change select regency:end

        //  Event on change select district:Start
        $('#kecamatan').change(function() {
            //clear select
            $("#kelurahan").empty();
            //set id
            let districtID = $(this).val();
            if (districtID) {
                $('#kelurahan').select2({
                    allowClear: true,
                    ajax: {
                        url: "{{ route('villages.select') }}?districtID=" + districtID,
                        dataType: 'json',
                        delay: 250,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });
            }
        });
        //  Event on change select district:End

        // EVENT ON CLEAR
        $('#provinsi').on('select2:clear', function(e) {
            $("#kabupaten").select2();
            $("#kecamatan").select2();
            $("#kelurahan").select2();
        });

        $('#kabupaten').on('select2:clear', function(e) {
            $("#kecamatan").select2();
            $("#kelurahan").select2();
        });

        $('#kecamatan').on('select2:clear', function(e) {
            $("#kelurahan").select2();
        });
    });
</script>

@endpush