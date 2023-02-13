@extends('layout')

@section('title')
    Login
@endsection
@section('content')
    @include('inc.errors')
    <form class="card" method="POST" action="{{ route('auth.handleLogin') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-2">
            <input type="email" name='email' class="form-control" value="{{ old('email') }}" placeholder=" email">
        </div>
        <div class="form-group m-2">
            <input type="password" name='password' class="form-control"  placeholder="password">
        </div>


        <br>
        <div class="row m-2">
            <div class="col">
                <button type="submit" style="width: 80%" class="btn btn-primary">Login</button>
            </div>
            <div class="col">
                <a style="width: 80%" class="btn btn-outline-danger ml-auto" href="{{route('auth.register')}} "> I Don't Have an Accout</a>
                {{-- <button type="submit" class="btn btn-primary m-2">Login</button> --}}
            </div>
        </div>

    </form>
@endsection
