@extends('layout.main')
@section('content')

    <section class="container">
        <h1 class="my-5">{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-md-3">
                <img class=" img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-9">
                <p><strong>Serie: </strong>{{ $comic->series }}</p>
                <p><strong>Data di uscita: </strong>{{ $comic->sale_date }}</p>
                <p><strong>Prezzo: </strong>{{ $comic->price }}€</p>
                <p><strong>Tipologia: </strong>{{ $comic->type }}</p>
                <p><strong>Descrizione: </strong>{{ $comic->description }}</p>
                <a href="{{ route('comics.index') }}"><< Torna indietro</a>
            </div>
        </div>
    </section>
    
@endsection