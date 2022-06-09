{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

<div class="login-form mt-1">
    <div class="section mt-1">
        <h1>Baby Daily</h1>
        <h4>Pertanyaan Keamanan</h4>
    </div>
    <div class="section mt-1 mb-5">
        <form action="{{ ('store_question')}}" method="POST">
            @csrf
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="pertanyaan">Pertanyaan</label>
                    <select class="form-select @error('pertanyaan') is-invalid @enderror" aria-label="Default select example" name="pertanyaan" id="pertanyaan">
                        <option value="1">Pilih..</option>
                        <option value="1">Dimana tempat wisata favorit anda?</option>
                        <option value="2">Siapakah nama guru favorit saat SMA?</option>
                        <option value="3">Apa Pekerjaan Impian anda?</option>
                        <option value="4">Apa makanan terenak menurut anda?</option>
                        <option value="5">Apa nama hewan peliharaan pertama anda?</option>
                    </select>
                </div>
                @error('pertanyaan')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="form-label" for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('jawaban')
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