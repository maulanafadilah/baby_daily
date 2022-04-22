{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.header-back')
        
        <div class="blog-post">
            <div class="mb-2">
                <img src="assets/img/sample/photo/wide1.jpg" alt="image" class="imaged square w-100">
            </div>
            <h1 class="title">How to take Landscape Photos in 10 Easy Ways</h1>

            <div class="post-header">
                <div>
                    <a href="#">
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w24 rounded me-05">
                        Alex Edwards
                    </a>
                </div>
                Jun 11, 2020
            </div>
            <div class="post-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                </p>
                <p>
                    Ut id fermentum nisi. In hac habitasse platea dictumst. Praesent ornare eget neque ut cursus. Nunc
                    efficitur laoreet vulputate. Curabitur mi ligula, aliquet commodo leo in, consectetur venenatis
                    tellus. Maecenas quis vehicula erat, vitae finibus tellus.
                </p>
                <p>
                    Cras rhoncus ipsum quis lacus aliquam, quis euismod ligula varius. Phasellus ac odio rhoncus,
                    aliquet nisl lobortis, commodo orci. Quisque bibendum est ut pellentesque hendrerit.
                </p>
                <img src="assets/img/sample/photo/wide2.jpg" alt="image">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                </p>
                <h2>Heading</h2>
                <p>
                    Ut id fermentum nisi. In hac habitasse platea dictumst. Praesent ornare eget neque ut cursus. Nunc
                    efficitur laoreet vulputate. Curabitur mi ligula, aliquet commodo leo in, consectetur venenatis
                    tellus. Maecenas quis vehicula erat, vitae finibus tellus.
                </p>
                <h4>Subtitle</h4>
                <p>
                    Cras rhoncus ipsum quis lacus aliquam, quis euismod ligula varius. Phasellus ac odio rhoncus,
                    aliquet nisl lobortis, commodo orci. Quisque bibendum est ut pellentesque hendrerit.
                </p>
                <h4>Subtitle</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                </p>
            </div>
        </div>


        <div class="section mt-4">
            <button type="button" class="btn btn-outline-primary btn-block" data-bs-toggle="offcanvas"
                data-bs-target="#actionSheetShare">
                <ion-icon name="share-outline"></ion-icon>
                Share This Post
            </button>
        </div>

@endsection