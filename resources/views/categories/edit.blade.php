@extends('layout')

@section('title')
    create
@endsection
@section('content')
    @include('inc.errors')
    <form class="card" method="POST" action="{{ route('categories.update',$category->id) }}">
        @csrf
        <div class="form-group">
            <input type="text" name='name' class="form-control" placeholder=" name">
        </div>
      
       
        <br>
        <button type="submit" class="btn btn-primary m-2">Update</button>

    </form>
@endsection
