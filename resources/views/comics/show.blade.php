@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section>
        <div class="container">
            <h2>Comic {{ $comic->id }}</h2>
            <div class="my-4">
                @if (!empty($comic->thumb))
                    <img class="w-25" src="{{ $comic->thumb }}" alt="">
                @else
                    <p>Nessuna immagine presente</p>
                @endif
            </div>
            <dl>
                <dt>Titolo</dt>
                <dd>{{ $comic->title }}</dd>
                <dt>Descrizione</dt>
                <dd>{{ $comic->description }}</dd>
                <dt>Prezzo</dt>
                <dd>{{ $comic->price }}</dd>
                <dt>Serie</dt>
                <dd>{{ $comic->series }}</dd>
                <dt>Data di vendita</dt>
                <dd>{{ $comic->sale_date }}</dd>
                <dt>Tipologia</dt>
                <dd>{{ $comic->type }}</dd>
            </dl>
        </div>
    </section>
@endsection
