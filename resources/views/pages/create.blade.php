@extends('layouts.app')

@section('title', 'Crea nuova risorsa')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>FORM</h1>
            {{-- action deve puntare allo store --}}
            <form action="{{ route('pages.store') }}" class="row g-3" method="POST">
                {{-- genera un token nascosto validato da laravel   --}}
                @csrf

                <div class="col-12">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" id="title" name="title" type="text" />
                </div>

                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="col-12">
                    <label class="form-label" for="thumb">Thumb</label>
                    <input class="form-control" id="thumb" name="thumb" type="url" />
                </div>

                <div class="col-12">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" id="price" name="price" type="number" step="0.01" />
                </div>

                <div class="col-12">
                    <label class="form-label" for="sale_date">Sale Date</label>
                    <input class="form-control" id="sale_date" name="sale_date" type="text" />
                </div>

                <div class="col">
                    <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Salva</button>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- Link cdn --}}
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
