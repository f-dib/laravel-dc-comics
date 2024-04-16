@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4 text-center">Modifica il Comic</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Nome</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $comic->title}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $comic->description}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Src immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') ?? $comic->thumb}}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') ?? $comic->series}}">
            @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $comic->price}}">
            @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Anno di Pubblicazione</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') ?? $comic->type}}">
            @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="artists" class="form-label">Disegnatore</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists') ?? $comic->artists}}">
            @error('artists')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittore</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers') ?? $comic->writers}}">
            @error('writers')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection