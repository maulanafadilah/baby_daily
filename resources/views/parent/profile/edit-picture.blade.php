{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-form')
    <div class="section mt-2">
    
                <form class="mt-2" method="post" action="/profile/{{auth()->user()->id}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <label for="fileUpload1" class="mt-1">Foto Profile</label>
                    @if($biodata->foto_orangtua == true)
                        <input type="hidden" name="oldImage" value="{{$biodata->foto_orangtua}}">
                    @endif

                    <div class="custom-file-upload" id="fileUpload1">
                        <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" name="foto_orangtua">
                        <label for="fileuploadInput">
                            <span>
                                <strong>
                                    <ion-icon name="cloud-upload-outline"></ion-icon>
                                    <i>Tap to Upload</i>
                                </strong>
                            </span>
                        </label>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </form>
    </div>
@endsection