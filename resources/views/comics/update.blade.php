@extends('layout.main')
@section('content')

    <section class="container">
        <form action="{{ route('comics.update',$comic) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="my-4">
                <label for="title" class="form-label">Titolo fumetto</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
            </div>

            <div class="mb-4">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description"  rows="8" class="form-control">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-4 row">
                <div class="col-md-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}">
                </div>
                <div class="col-md-6">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}">
                </div>
            </div>
            <div class="mb-4 row">
                <div class="col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}">
                </div>
                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Data d'uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-3">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        
        </form>
    </section>

@endsection