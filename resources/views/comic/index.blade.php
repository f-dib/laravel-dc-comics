@extends('layouts/app')


@section('content')
<main class="my_bg_color">
        <div class="container-xl d-flex flex-column justify-content-center align-items-center">
            <div class="buy_area">
                <div class="mini_alert text-white">current series</div>
                <div class="d-flex flex-wrap">
                    @foreach($comics as $comicItem)
                        <div class="comic">
                            <div class="comics_size">
                                <img class="my_poster" src="{{ $comicItem['thumb'] }}" alt="{{ $comicItem['title'] }}">
                            </div>
                            <h4 class="text-white">{{ $comicItem['series'] }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
            <div><button class="load_more">load more</button></div>
        </div>
    </main>

    <div class="bg">
        <div class="container-xl d-flex justify-content-around align-items-center">
            @foreach($buy as $buyItem)
                <div class="my_flex_list">
                    <div class="my_img_box">
                        <img class="my_img" src="{{ Vite::asset($buyItem['img']) }}" alt="{{ $buyItem['description'] }}">
                    </div>
                    <div class="text-white text-uppercase">{{ $buyItem['description'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection