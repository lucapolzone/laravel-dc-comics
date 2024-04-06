@extends('layouts.app')

@section('title', 'Modifica le info di un fumetto')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Modifica le info di un fumetto</h1>
            <form action="{{ route('pages.update', $comic) }}" class="row g-3" method="POST">
                @csrf
                @method('PATCH')

                <div class="col-12">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" id="title" name="title" type="text" value="{{ $comic->title }}"/>
                </div>

                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
                </div>

                <div class="col-12">
                    <label class="form-label" for="thumb">Thumb</label>
                    <input class="form-control" id="thumb" name="thumb" type="url" value="{{ $comic->thumb }}"/>
                </div>

                <div class="col-12">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" id="price" name="price" type="text" value="{{ $comic->price }}"/>
                </div>

                <div class="col-12">
                    <label class="form-label" for="sale_date">Sale Date</label>
                    <input class="form-control" id="sale_date" name="sale_date" type="text" value="{{ $comic->sale_date }}"/>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </div>
            </form>
        </div>
    </section>
@endsection