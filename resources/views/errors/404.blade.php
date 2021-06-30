@extends('layout.main')

@section('content')
    <section class="text-center mt-5">
        <h1>ERRORE 404</h1>
        <p>{{$exception->getMessage()}}</p>
    </section>
@endsection