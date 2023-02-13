@extends('layout')

@section('content')
    <h1>All Books</h1>
    <div class="row">
        <div class="col">
            @auth
                <div class="card">
                    <h3>Notes</h3>
                    <ul>
                        @foreach (Auth::user()->notes as $note)
                            <li>{{ $note->content }}</li>
                        @endforeach
                    </ul>
                    <a style="width: 25rem" class="btn card-link btn-success my-2" href="{{ route('notes.create') }} ">create</a>

                </div>
                <a style="width: 25rem" class="btn card-link btn-success my-2" href="{{ route('books.create') }} ">create</a>
            @endauth
        </div>
        <div class="col">

            @foreach ($books as $book)
                <div class="container">

                    <div class="card container">
                        <div class="card-body">
                            <a class=" container btn btn-secondary"
                                href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                            <div class="row">
                                <div class="col">
                                    <p my-2>{{ $book->desc }}</p>
                                </div>
                                <div class="col">
                                    <img class="card-img-top" src="{{ asset('uploads/books/' . $book->img) }} "
                                        alt="no img">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="btn card-link btn-success" href="{{ route('books.edit', $book->id) }} ">edit</a>
                            <a class="btn card-link btn-info" href="{{ route('books.show', $book->id) }} ">show</a>
                            <a class="btn card-link btn-danger" href="{{ route('books.delete', $book->id) }} ">delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{ $books->render() }}
@endsection
