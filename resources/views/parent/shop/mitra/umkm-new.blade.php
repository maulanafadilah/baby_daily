{{-- Extends layout --}}
@extends('parent.layout.default')


{{-- Content --}}
@section('content')

@include('parent.shop.elements.umkm-header')
            @php
                $max_columns = 3;
                $data = array(1,2,3,4,5,6,7,8,9,10,11,12);
            @endphp

            <div class="section">
                    @php 
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
                                @endphp
                                
                                <div class="col text-center" onclick="window.location.href='/store'">
                                    <img src="{{asset('/img/1.jpg')}}" alt="image" class="imaged w86">
                                    <h4 class="mt-1">$record_id;</h4>
                                </div>

                                @php
                                if ($column == $max_columns){
                                    echo "</div>";
                                }
                                $record_id++;
                            }
                        }
                    @endphp
            </div>
@endsection