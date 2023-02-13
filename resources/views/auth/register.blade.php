@extends('layout')

@section('title')
    Sign Up
@endsection
@section('content')
    @include('inc.errors')
    <form class="card container " method="POST" action="{{ route('auth.handleRegister') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group m-2">
            <input type="text" name='name' class="form-control" value="{{ old('name') }}" placeholder=" name">
        </div>
        <div class="form-group m-2">
            <input type="email" name='email' class="form-control" value="{{ old('email') }}" placeholder=" email">
        </div>
        <div class="form-group m-2">
            <input type="password" name='password' class="form-control" placeholder="password">
        </div>


        <div class="row  m-2">
            <div class="col ">
                <button type="submit" style="width: 80%" class="btn   btn-primary">Sign Up</button>
            </div>
            <div class="col">
                <a style="width: 80%" class="btn btn-outline-danger  ml-auto" href="{{ route('auth.login') }} "> I already
                    Have an Accout</a>
            </div>
        </div>
    </form>
@endsection
