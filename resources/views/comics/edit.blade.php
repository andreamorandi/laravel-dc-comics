@extends('layouts.app')

@section('title', 'Modifica')

@section('content')
    <div class="container">
        <h2 class="text-center">Modifica comic: {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-7 mb-4">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image">Miniatura</label>
                        <input class="form-control" type="text" id="image" name="image"
                            value="{{ $comic->image }}">
                    </div>

                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="type">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date">Data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type">Tipologia</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>

                    <button type="submit" class="btn btn-warning">Salva</button>
                </form>
            </div>
        </div>

    </div>
@endsection
