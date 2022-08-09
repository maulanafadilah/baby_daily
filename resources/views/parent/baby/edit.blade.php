{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-form')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

        <div class="section mt-2">
                <form class="needs-validation mt-2" method="post" action="/balita/{{$biodata->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name5" name="nama_lengkap" value="{{$biodata->nama_lengkap}}" placeholder="Masukan Nama Lengkap" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Tolong masukkan nama lengkap.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tempat Lahir</label>
                            <input type="text" class="form-control" id="name5" name="tempat_lahir" value="{{$biodata->tempat_lahir}}" placeholder="Masukan Tempat Lahir" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tanggal Lahir</label>
                            <input type="text" class="date form-control" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="city5">Jenis Kelamin</label>
                            <select class="form-control form-select" id="city5" name="jenis_kelamin">
                                <option value="L" {{ ( $biodata->jenis_kelamin == 'L') ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="P" {{ ( $biodata->jenis_kelamin == 'P') ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tinggi Lahir (CM)</label>
                            <input type="text" class="form-control" id="name5" name="tinggi_lahir" value="{{$biodata->tinggi_lahir}}"  placeholder="Masukan Tinggi Lahir" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Berat Lahir (KG)</label>
                            <input type="text" class="form-control" id="name5" name="berat_lahir" value="{{$biodata->berat_lahir}}"  placeholder="Masukan Berat Lahir" required>
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
        </div>

        <script type="text/javascript">
            $('.date').datepicker({  
            format: 'yyyy-mm-dd'
            });  
        </script>
@endsection