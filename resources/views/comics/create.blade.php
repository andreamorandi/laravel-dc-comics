@extends('layouts.app')

@section('title', 'Crea un nuovo comic')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Crea un nuovo comic</h2>
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
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Titolo</label>
                            <input type="text"
                                class="form-control 
                                @error('title')
                                    is-invalid
                                @enderror"
                                value="{{ old('title') }}" id="title" name="title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="description">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                rows="10">
                                {{ old('description') }}
                            </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Miniatura (se presente)</label>
                            <input type="text"
                                class="form-control 
                                @error('thumb')
                                    is-invalid
                                @enderror"
                                value="{{ old('thumb') }}" id="thumb" name="thumb">
                            @error('thumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="price">Prezzo</label>
                            <input type="text"
                                class="form-control 
                                @error('price')
                                    is-invalid
                                @enderror"
                                value="{{ old('price') }}" id="price" name="price">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="series">Serie</label>
                            <input type="text"
                                class="form-control 
                                @error('series')
                                    is-invalid
                                @enderror"
                                value="{{ old('series') }}" id="series" name="series">
                            @error('series')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Data di vendita</label>
                            <input type="text"
                                class="form-control 
                                @error('sale_date')
                                    is-invalid
                                @enderror"
                                value="{{ old('sale_date') }}" id="sale_date" name="sale_date">
                            @error('sale_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="type">Tipologia</label>
                            <input type="text"
                                class="form-control 
                                @error('type')
                                    is-invalid
                                @enderror"
                                value="{{ old('type') }}" id="type" name="type">
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-success" type="submit">Salva</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
