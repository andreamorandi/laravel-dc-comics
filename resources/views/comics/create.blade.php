@extends('layouts.app')

@section('title', 'Crea un nuovo comic')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Crea un nuovo comic</h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="description">Descrizione</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Miniatura (se presente)</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <div class="mb-2">
                            <label for="price">Prezzo</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-2">
                            <label for="series">Serie</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Data di vendita</label>
                            <input type="date" name="sale_date" />
                        </div>

                        <div class="mb-2">
                            <label for="type">Tipologia</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <button class="btn btn-success" type="submit">Salva</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
