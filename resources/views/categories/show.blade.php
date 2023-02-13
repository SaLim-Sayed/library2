@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title "> {{ $category->name }}</h3>

        </div>
        <div class="card-body">
            <h3>Books</h3>
            <ul>
                @foreach ($category->books as $book)
                    <li> {{ $book->title }} </li>
                @endforeach
            </ul>
        </div>
        <div class="card-body">
            <a class="btn card-link btn-success" href="{{ route('categories.edit', $category->id) }} ">edit</a>
            <a class="btn card-link btn-info" href="{{ route('categories.show', $category->id) }} ">show</a>
            <a class="btn card-link btn-danger" href="{{ route('categories.delete', $category->id) }} ">delete</a>
        </div>
    </div>
    <hr>
@endsection
