@extends('layouts/app')


@section('content')
    @foreach($comics as $comicItem)
        {{ $comicItem['title'] }}<br>
    @endforeach
@endsection