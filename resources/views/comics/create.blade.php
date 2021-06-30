@extends('layout.main')
@section('content')

    <section class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="my-4">
                <label for="title" class="form-label">Titolo fumetto</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="mb-4">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description"  rows="8" class="form-control"></textarea>
            </div>

            <div class="mb-4">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control">
            </div>

            <div class="mb-4 row">
                <div class="col-md-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>
            </div>
            <div class="mb-4 row">
                <div class="col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Data d'uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-3">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        
        </form>
    </section>

@endsection