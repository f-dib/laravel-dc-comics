@extends('layouts/app')


@section('content')
<div class="my_preview">
        <div class="container-lg">
            <div>
                <div class="my_poster2">
                    <img  class="img-fluid" src="{{$comic->thumb}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="my_description">
        <div class="container-lg d-flex gap-3">
            <div>
                <h1>{{ $comic->title }}</h1>
                <p>{{ $comic->description }}</p>
            </div>
            <div>
                <h5 class="text-uppercase text-secondary text-end">advertisement</h5>
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="my_specs">
        <div class="container-lg ">
            <div class="d-flex gap-5 my_pb">
                <div class="w-50">
                    <div class="py-3 my_bb">
                        <h4>Talent</h4>
                    </div>
                    <div class="py-1 my_bb d-flex flex-wrap">
                        testo
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                </div>
                <div class="w-50">
                    <div class="py-3 my_bb">
                        <h4>Specs</h4>
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                </div>
            </div>
        </div>
        <div class="my_shop">

        </div>
    </div>
@endsection