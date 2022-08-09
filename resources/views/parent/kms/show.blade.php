{{-- Extends layout --}}
@extends('parent.layout.default')

{{-- Content --}}
@section('content')

@include('parent.kms.elements.show-header')

@if(session()->has('success'))
            <!-- <li>
                <a href="#" onclick="toastbox('toast-12', 2000)">
                </a>
            </li> -->

            <div id="toast-12" class="toast-box toast-center show">
                <div class="in">
                    <div class="text">
                    {{ session('success') }}
                    </div>
                </div>
            </div>

            <script>
                setTimeout(() => {
                closeToastBox('toast-12')
                }, 2000);
            </script>
        @endif

<div class="section mt-3">
            <div class="profile-head">
                <div class="avatar">
                    <img src="{{asset('assets/img/sample/avatar/avatar1.jpg')}}" alt="avatar" class="imaged w64 rounded">
                </div>
                <div class="in">
                @if (!empty($balita))
                    <h3 class="name">{{$balita->nama_lengkap}}</h3>
                    <h5 class="subtext">Usia: {{$usia->usia}} Bulan</h5>
                @endif
                </div>
            </div>
        </div>


        <div class="section full mt-3">
            <div class="wide-block transparent p-0">
                <ul class="nav nav-tabs lined" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#feed" role="tab">
                            <!-- <ion-icon name="grid-outline"></ion-icon> -->
                            Biodata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#friends" role="tab">
                            <!-- <ion-icon name="people-outline"></ion-icon> -->
                            Perkembangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#bookmarks" role="tab">
                            <!-- <ion-icon name="bookmark-outline"></ion-icon> -->
                            Kehadiran
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class="section full mb-2">
            <div class="tab-content">

                <!-- feed -->
                <div class="tab-pane fade show active" id="feed" role="tabpanel">
                    <div class="mt-2 p-2 pt-0 pb-0">
                    <ul class="listview simple-listview" style="background: transparent; border: 0;">
                    @if (!empty($balita))
                        <li>
                                <div class="in">
                                    <div>
                                        <header>Tempat, Tangal Lahir</header>
                                        {{$balita->tempat_lahir}}, {{$balita->tanggal_lahir}}
                                    </div>
                                </div>
                        </li>
                        <li>
                                <div class="in">
                                    <div>
                                        <header>Jenis Kelamin</header>
                                        {{$balita->jenis_kelamin}}
                                    </div>
                                </div>
                        </li>
                        <li>
                                <div class="in">
                                    <div>
                                        <header>Tinggi Lahir (CM)</header>
                                        {{$balita->tinggi_lahir}}
                                    </div>
                                </div>
                        </li>
                        <li>
                                <div class="in">
                                    <div>
                                        <header>Berat Lahir (KG)</header>
                                        {{$balita->berat_lahir}}
                                    </div>
                                </div>
                        </li>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-secondary btn-block" onclick="window.location.href='/balita/{{$balita->id}}/edit'">Edit</button>
                                </div>
                                <div class="col">
                                    <form action="/balita/{{$balita->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-outline-danger btn-block" onclick="return confirm('Apakah yakin ingin dihapus?')" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        @endif
                    </ul>
                    </div>
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <div class="tab-pane fade" id="friends" role="tabpanel">
                    <div class="card-body">
					    @include('parent/kms/line_charts')
				    </div>
                </div>
                <!-- * friends -->

                <!--  bookmarks -->
                <div class="tab-pane fade" id="bookmarks" role="tabpanel">
                    <ul class="listview image-listview media flush transparent pt-1">
                        @if (!empty($kehadiran))
				        @foreach ($kehadiran as $item)
                        <li>
                            <a href="/kehadiran/{{$item->id}}/edit" class="item">
                                <div class="imageWrapper">
                                    
                                </div>
                                <div class="in">
                                    <div>
                                        <div class="text-muted">{{$item->tanggal}}</div>
                                        {{$item->tinggi}}Cm, {{$item->berat}}Kg
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
				        @endif
                    </ul>
                </div>
                <!-- * bookmarks -->
                
            </div>
        </div>
        <!-- * tab content -->
@endsection