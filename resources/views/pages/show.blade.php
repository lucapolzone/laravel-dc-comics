@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container">
            <p><strong>Titolo fumetto: </strong> {{ $comic->title }}</p>
            <p><strong>Descrizione fumetto: </strong> {{ $comic->description }}</p>
            <p><strong>Copertina:</strong></p>
            <img src="{{ url($comic['thumb']) }}" alt="">
            <p><strong>Prezzo: </strong> {{ $comic->price }}</p>
            <p><strong>Data pubblicazione: </strong> {{ $comic->sale_date }}</p>
        </div>
    </section>
@endsection
