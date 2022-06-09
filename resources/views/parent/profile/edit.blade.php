{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-form')

    <div class="section mt-2">
        @switch ($biodata)
            @case($biodata->nama_lengkap == true)
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name5" name="nama_lengkap" value="{{$biodata->nama_lengkap}}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
                @break
            @case($biodata->nik == true)
                <div class="alert alert-outline-info" role="alert">
                    <h4 class="alert-title"><span><ion-icon name="information-circle-outline"></ion-icon></span> Informasi</h4>
                    Nomor NIK diperlukan untuk mencocokan data dengan No KK anak di Posyandu
                </div>
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">NIK</label>
                            <input type="text" class="form-control" id="name5" name="nik" value="{{$biodata->nik}}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
                @break
            @case($biodata->no_kk == true)
                <div class="alert alert-outline-info" role="alert">
                    <h4 class="alert-title"><span><ion-icon name="information-circle-outline"></ion-icon></span> Informasi</h4>
                    Nomor KK diperlukan untuk mencocokan data dengan No KK anak di Posyandu
                </div>
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">No KK</label>
                            <input type="text" class="form-control" id="name5" name="no_kk" value="{{$biodata->no_kk}}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
                @break
            
            @case($biodata->jenis_kelamin == true)
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="city5">Jenis Kelamin</label>
                            <select class="form-control form-select" id="city5" name="jenis_kelamin">
                                <option value="L" {{ ( $biodata->jenis_kelamin == 'L') ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="P" {{ ( $biodata->jenis_kelamin == 'P') ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
                @break
            @case($biodata->jenis_kelamin == false)
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="city5">Jenis Kelamin</label>
                            <select class="form-control form-select" id="city5" name="jenis_kelamin">
                                <option>Pilih..</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
                @break
        @endswitch   
    </div>

@endsection