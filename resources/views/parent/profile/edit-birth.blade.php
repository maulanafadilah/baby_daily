{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.profile.elements.header-form')
    <div class="section mt-2">
        @switch ($biodata)
            @case($biodata->tanggal_lahir == true)
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="name5" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}" required>
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
            @case($biodata->tanggal_lahir == false)
                <form class="needs-validation mt-2" method="post" action="/profile/{{auth()->user()->id}}">
                    @method('put')
                    @csrf
                    
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="name5" name="tanggal_lahir" required>
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
        @endswitch
    </div>
@endsection