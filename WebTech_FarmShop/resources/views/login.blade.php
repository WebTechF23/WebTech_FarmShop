<!-- resources/views/child.blade.php -->
@extends('ViewTemplate')

@section('title')
    <title>Login</title>
@endsection


@section('header')
    <h1>Login</h1>
@endsection



@section('main')
    <div class="user_container">
        <h1>Sign In</h1>
        <form action="{{route('loginAuth')}}" method="post">
            @csrf
            <input class="btn" type="email" id="email_input" name="email" placeholder="Email" required>
            <input class="btn" type="password" id="password_input" name="password" placeholder="Password" required>
            <input class="btn" type="submit"value="Log In">
        </form>
        <p>Dont have an account?</p>
        <a id="" href="{{route('registerPage')}}">Create Account</a>
    </div>

@endsection
