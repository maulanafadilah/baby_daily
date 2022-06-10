{{-- Extends layout --}}
@extends('sellers.layout.default')

{{-- Content --}}
@section('content')
<div class="container">
    <form action="{{ route('notebooks.update',$notebooks->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-auto form-group boxed">
            <h4 class="subtitle mt-2">Judul Catatan</h4>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <input type="text" class="form-control" id="name1" placeholder="Enter your name" name="judul" value="{{ $notebooks->judul }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('judul')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>
            <h4 class="subtitle mt-2">Isi Catatan</h4>
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <textarea id="deskripsi" rows="2" class="form-control" name="isi">{{ $notebooks->isi }}</textarea>
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                @error('isi')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn-block mt-2" type="submit">Simpan</button>
    </form>
</div>
@endsection

{{-- extention --}}
@section('extention')
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
@endsection