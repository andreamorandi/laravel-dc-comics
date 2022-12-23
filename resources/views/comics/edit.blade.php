@extends('layouts.app')

@section('title', 'Modifica')

@section('content')
    <div class="container">
        <h2 class="text-center">Modifica comic: {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-7 mb-4">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                            name="title" value="{{ old('title', $comic->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            rows="10">{{ old('description', $comic->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb">Miniatura</label>
                        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb"
                            name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                    </div>

                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price"
                            name="price" value="{{ old('price', $comic->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="series">Serie</label>
                        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series"
                            name="series" value="{{ old('series', $comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date">Data di vendita</label>
                        <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date"
                            name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type">Tipologia</label>
                        <input class="form-control @error('type') is-invalid @enderror" type="text" id="type"
                            name="type" value="{{ old('type', $comic->type) }}">
                    </div>

                    <button type="submit" class="btn btn-warning">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
