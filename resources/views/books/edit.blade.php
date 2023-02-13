@extends('layout')

@section('title')
    edit
@endsection
@section('content')
    @include('inc.errors')
    <form class="card" method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="text" name='title' class="form-control" value="{{ old('title') ?? $book->title }}"
                placeholder=" title">
        </div>
        <div class="form-group">
            <textarea class="form-control my-2" name="desc" rows="3" placeholder="Description"> 
                    {{ old('desc') ?? $book->desc }}
                </textarea>
        </div>
        <div class="form-group py-2">
            <input type="file" name="img" class="form-control-file">
        </div>
        <br>
        <button type="submit" class="btn btn-primary m-2">Create</button>

    </form>
@endsection
