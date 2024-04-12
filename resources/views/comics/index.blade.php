@extends('layouts/app')


@section('content')
    <main class="my_bg_color">
        <div class="container-xl d-flex flex-column justify-content-center align-items-center">
            <div class="buy_area">
                <div class="mini_alert text-white">current series</div>
                <div class="d-flex flex-wrap">
                    @foreach($comics as $comic)
                    <a href="{{route('comics.show', $comic->id)}}">
                        <div class="comic">
                            <div class="comics_size">
                                <img class="my_poster" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div>
                                <h4 class="text-white text-nowrap">{{ $comic['series'] }}</h4>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div><a href="/comics/create"><button class="load_more">Aggiungi Comic</button></a></div>
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