@extends('layout')

@section('content')
    <div class="row">

        <div class="col-6">

            @foreach ($categories as $cat)
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title "> {{ $cat->name }}</h3>

                    </div>
                    <div class="card-body">
                        <a class="btn card-link btn-success" href="{{ route('categories.edit', $cat->id) }} ">edit</a>
                        <a class="btn card-link btn-info" href="{{ route('categories.show', $cat->id) }} ">show</a>
                        <a class="btn card-link btn-danger" href="{{ route('categories.delete', $cat->id) }} ">delete</a>
                    </div>
                </div>
                <hr>
            @endforeach

        </div>
        <div class="col">
            <a style="width: 25rem" class="btn btn-success" href="{{ route('categories.create') }} ">create</a>
        </div>
    </div>
@endsection
