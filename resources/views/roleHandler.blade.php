{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
        </div>
        <div class="pageTitle">Error</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

        <div class="error-page">
            <img src="assets/img/sample/photo/vector6.png" alt="alt" class="imaged square w200">
            <h1 class="title mt-2">We are working on it!</h1>
            <div class="text mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

            <div class="fixed-footer">
                <div class="row">
                    <div class="col-12">
                        <a href="/" class="btn btn-primary btn-lg btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

@endsection