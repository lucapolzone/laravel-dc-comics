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
                        <th scope="col" class="text-center">Show</th>
                        <th scope="col" class="text-center">Modifica</th>
                        <th scope="col" class="text-center">Elimina</th>
                    </tr>
                </thead>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td class="text-center">
                        <a href="{{ route('pages.show', $comic) }}">
                            <i class="fa-solid fa-eye" style="color: Dodgerblue;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('pages.edit', $comic) }}">
                            <i class="fa-solid fa-pen" style="color: orange;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        
                        {{-- includo la modal --}}
                        @include('partials.modal')
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $comics->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection

{{-- Link cdn font awesome --}}
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
