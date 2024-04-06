@extends('layouts.app')

@section('title', 'Modifica le info di un fumetto')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Modifica le info di un fumetto</h1>
            <form action="{{ route('pages.store') }}" class="row g-3" method="POST">
                @csrf

                <div class="col-12">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" id="title" name="title" type="text" value="pippo"/>
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
                    <button class="btn btn-warning">Modifica</button>
                </div>
            </form>
        </div>
    </section>
@endsection