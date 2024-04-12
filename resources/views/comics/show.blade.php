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
        <div class="container-lg d-flex gap-3 justify-content-between">
            <div class="w-100">
                <h1 class="mb-3">{{ $comic->title }}</h1>
                <div class="my_availability d-flex mb-3">
                    <div class="text-white w-75 my_border_av p-3 d-flex justify-content-between">
                        <div>
                            U.S. Price: {{ $comic->price }}
                        </div>
                        <div class="text-uppercase">
                            available
                        </div>
                    </div>
                    <div class="text-white p-3 text-center w-25">
                        Check Availability
                    </div>
                </div>
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
                    <div class="py-1 my_bb d-flex">
                        <div class="w-25">
                            Art by:
                        </div>
                        <div class="w-75 text-primary">
                            {{ $comic->artists }}
                        </div>
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
        <div class="py-4 w-100 d-flex justify-content-center gap-5">
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>     
        </div>
        <div class="my_shop">

        </div>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la pasta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro che vuoi eliminare il comic "{{$comic->title}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        
                        {{-- stessa cosa --}}
                        {{-- <input type="submit" class="btn btn-danger" value="Elimina"> --}}
                        <button class="btn btn-danger">Elimina</button>
                    </form>

                </div>

            </div>
            </div>
    </div>
@endsection