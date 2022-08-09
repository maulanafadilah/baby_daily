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
                <form class="needs-validation mt-2" method="post" action="/kms/{{$id_balita}}">
                @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tanggal</label>
                            <input type="text" class="date form-control" name="tanggal" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tinggi (CM)</label>
                            <input type="number" class="form-control" id="name5" name="tinggi" placeholder="Masukan Tinggi" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Berat (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="name5" name="berat" placeholder="Masukan Berat" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>
                    

                    <div class="mt-4">
                        <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                    </div>

                </form>
        </div>

        <script type="text/javascript">
            $('.date').datepicker({  
            format: 'yyyy-mm-dd'
            });  
        </script>
@endsection