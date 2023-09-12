@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">
    <h1 class="text-center">Create New Account</h1>

    <form action="{{'/register'}}" method="POST">
        {{csrf_field()}}

        <div class="form-group mb-3">
            <label for="name">Username</label>
            <input type="name" name="name" id="name" class="form-control">
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>


        <div class="form-group mb-3">
            <label for="password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <div class="d-flex">
            <div class="flex-grow-1">
                <a href="{{'/'}}">Already have an account?</a>
            </div>
            <button class="btn btn-primary px-5" type="submit">Sign up</button>
        </div>
    </form>
</div>
@endsection
