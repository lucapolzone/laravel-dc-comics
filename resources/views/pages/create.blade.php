@extends('layouts.app')

@section('title', 'Crea nuova risorsa')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>FORM</h1>

            <form action="{{ route('pages.store') }}" method="POST">
                @csrf


            </form>
        </div>
    </section>
@endsection
