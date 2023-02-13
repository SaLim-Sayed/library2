@extends('layout')

@section('title')
    Create Note
@endsection

@section('content')
    @include('inc.errors')

    <form method="POST" action="{{ route('notes.store') }}" enctype="multipart/form-data">
        @csrf
       

        <div class="form-group my-2">

            <textarea class="form-control" name="content" placeholder="content" rows="3">{{ old('content') }}</textarea>
        </div>
       
        <button type="submit" class="btn btn-primary mb-2">Create</button>
    </form>
@endsection