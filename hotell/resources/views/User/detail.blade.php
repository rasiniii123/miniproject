@extends('layouts.yss')

@section('content')
    <section class="section-home-about bg-white" style="margin-top: 1%">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center" style="margin-top: -50px;">
                    @foreach($rooms as $room)
                        <h2 class="heading" style="font-size: 30px;">{{$room->name}}</h2>
                        <div class="img" style="margin-top: 2px">
                            <a><img src="{{$room->image}}" alt="" style="width: 100%; margin-top : 20px"></a>
                            <div class="img" style="margin-top: 2px">
                                <div style="float: left; color: #232323; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word;clear: both;">
                                    Rp. {{$room->price}}
                                </div>
                                <div style="float: left; color: #FFBF43; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 120px; margin-top:-30px;">
                                    / Malam
                                </div>
                            </div>
                        </div>
                        <img src="images/Vector-2.png" alt="Garis bawah" style="width: 100%; margin-top: -5px; color:#92989F">
                        <!-- Button for detail -->
                        <div style="margin-top: 10px; display: flex; justify-content: center;">
                            <a href="{{ route('detail.index', ['id' => $room->id]) }}" class="btn btn-primary btn-lg" style="background-color: #283E58; width: 200px;">DETAIL</a>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        function handleButtonClick(detailUrl) {
            window.location.href = detailUrl;
        }
    </script>
@endsection
