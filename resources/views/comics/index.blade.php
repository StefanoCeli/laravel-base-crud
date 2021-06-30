@extends('layout.main')
@section('content')

    <main>

        <h1 class="mt-5 text-center">I nostri fumetti</h1>

        @if (session('deleted'))
            <div class="alert alert-danger container" role="alert">
                <span><strong>{{ session('deleted') }}</strong> Eliminato correttamente</span>
            </div>
        @endif

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
                        <td><a href="{{ route('comics.edit',$comic) }}" class="btn btn-secondary">EDIT</a></td>
                        <td>
                            <form action="{{ route('comics.destroy',$comic) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
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