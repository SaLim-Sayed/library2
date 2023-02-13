
@extends('layout')

@section('title')
    create
@endsection
@section('content')
    @include('inc.errors')
    <form class="card" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="text" name='name' class="form-control" placeholder=" name">
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary m-2">Create</button>

    </form>
@endsection
