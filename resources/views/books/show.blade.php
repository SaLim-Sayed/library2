@extends('layout')

@section('title')
    Book ID :{{ $book->id }}
@endsection
@section('content')
    <h1>Book ID:{{ $book->id }}</h1>

    <hr>
    <div class="card container" style="width: 28rem">
        <h3 class="btn btn-primary">{{ $book->title }}</h3>
        <div class="row">
            <div class="col">
                <p>{{ $book->desc }}</p>
            </div>
            <div class="col"><img class="card-img-top" src="{{ asset('uploads/books/' . $book->img) }}" alt=""></div>
        </div>

        <h4>Category:</h4>
        <ul>
            @foreach ($book->categories as $category)
                <li>{{ $category->name }} </li>
            @endforeach
        </ul>
        <div class="card-body">
            <a class="btn card-link btn-success" href="{{ route('books.edit', $book->id) }} ">edit</a>
            <a class="btn card-link btn-info" href="{{ route('books.show', $book->id) }} ">show</a>
            <a class="btn card-link btn-danger" href="{{ route('books.delete', $book->id) }} ">delete</a>
        </div>
    </div>
    <hr>

    <a href="{{ route('books.index') }}">Back</a>
@endsection
