@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>I miei fumetti</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Collana</th>
                        <th scope="col">Data pubblicazione</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('pages.show', $comic->id) }}">Dettaglio</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $comics->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
