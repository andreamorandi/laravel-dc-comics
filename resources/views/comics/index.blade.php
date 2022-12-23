@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section class="bg-success">
        <div class="container py-4">
            <h2 class="text-center text-white">Tutti i nostri comics</h2>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <div class="text-end mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-success">Crea un nuovo comic</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipologia</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"
                                        data-comic-title="{{ $comic->title }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    @include('partials.delete-modal')
@endsection
