{{-- Extends layout --}}
@extends('sellers.layout.default')
{{-- Content --}}
@section('content')

<div class="section full mt-2 mb-2">
    <div class="wide-block pb-2 pt-2">
        <form action="{{ route('images.update',$id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label" for="fileUpload1">Upload Gambar</label>
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
            <button class="btn btn-primary btn-block mt-2" type="submit">Ubah</button>
        </form>
    </div>
</div>

@endsection