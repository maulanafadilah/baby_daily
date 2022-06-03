<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#s000000">
    <title>Baby Daily | @yield('title', $page_title ?? '')</title>
    <meta name="description" content="@yield('page_description', $page_description ?? '')">
    <!-- <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" /> -->
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="manifest" href="__manifest.json">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="assets/css/custom-style.css">
    <script type="module" src="{{ URL::asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>

</head>

<body>
@include('parent.shop.elements.umkm-header')

            <?php
                $max_columns = 3;
                $data = $seller_count;
            ?>

            <div id="appCapsule">
            <div class="section">
                    <?php 
                        $record_id = 0;
                        while(true)
                        {
                            for ($column = 1; $column<=$max_columns; $column++)
                            {
                                if(!isset($data[$record_id]))
                                {
                                    return;
                                }
                                
                                if ($column == 1){
                                    echo '<div class="row mt-2">';
                                }
                                ?>
                                
                                @foreach($seller as $item)
                                <div class="col text-center" onclick="window.location.href='/store/{{$item->id_penjual}}'">
                                    <img src="{{asset('img/profile/'.$item->foto_penjual)}}" alt="image" class="imaged w86">
                                    <h4 class="mt-1">{{$item->nama_toko}}</h4>
                                </div>
                                @endforeach

                                <?php
                                if ($column == $max_columns){
                                    echo "</div>";
                                }
                                $record_id++;
                            }
                        }
                    ?>
            </div>
            </div>

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="{{ URL::asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    
    <!-- Splide -->
    <script src="{{ URL::asset('assets/js/plugins/splide/splide.min.js') }}"></script>
    <!-- ProgressBar js -->
    <script src="{{ URL::asset('assets/js/plugins/progressbar-js/progressbar.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ URL::asset('assets/js/base.js') }}"></script>

    <script>
        // Trigger welcome notification after 5 seconds
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>