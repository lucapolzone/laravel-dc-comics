@extends('layouts.app')

@section('title', 'Pagina fumetto')

@section('main-content')
    <section>
        <div class="container">
            <a href="{{ route('pages.edit', $comic) }}" class="btn btn-warning my-3">Modifica</a>
            <p><strong>Titolo fumetto: </strong> {{ $comic->title }}</p>
            <p><strong>Descrizione fumetto: </strong> {{ $comic->description }}</p>
            <p><strong>Copertina:</strong></p>
            <img src="{{ url($comic['thumb']) }}" alt="">
            <p><strong>Prezzo: </strong> {{ $comic->price }}</p>
            <p><strong>Collana: </strong> {{ $comic->series }}</p>
            <p><strong>Data pubblicazione: </strong> {{ $comic->sale_date }}</p>
            <p><strong>Categoria: </strong> {{ $comic->type }}</p>
        </div>
    </section>
@endsection
