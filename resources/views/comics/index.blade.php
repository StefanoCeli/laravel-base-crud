@extends('layout.main')
@section('content')
    <main>
        <h1 class="mt-5 text-center">I nostri fumetti</h1>
        <section class="mt-3 container">
            <table class="table  table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>SERIES</th>
                        <th>SALE_DATE</th>
                        <th colspan="3">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td><a href="{{ route('comics.show',$comic) }}" class="btn btn-success">SHOW</a></td>
                        <td><a class="btn btn-secondary">EDIT</a></td>
                        <td><a class="btn btn-primary">DELETE</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $comics->links() }}
            </div>
        </section>
    </main>
@endsection