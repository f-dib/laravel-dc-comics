@extends('layouts/app')


@section('content')
    <div class="container-xl py-4">
        <h1 class="text-center">Aggiungi Comic</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Src immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label">Anno di Pubblicazione</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            
            <div class="mb-3">
                <label for="artists" class="form-label">Disegnatore</label>
                <input type="text" class="form-control" id="artists" name="artists">
            </div>
            
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittore</label>
                <input type="text" class="form-control" id="writers" name="writers">
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
</div>
@endsection