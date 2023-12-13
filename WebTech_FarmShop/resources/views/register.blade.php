@extends('ViewTemplate')

@section('title')
    <title>Register page</title>
@endsection


@section('header')
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <h1>Register page</h1>
@endsection



@section('main')
    <form action="{{url('RegisterController/register')}}" method="POST">
        @csrf
        <div class="user_container">

            <label for="name">Name: </label><br>
            <input type="text" id="name" name="name" class="btn"><br>

            <label for="password">Password: </label><br>
            <input type="password" id="password" name="password" class="btn"><br>

            <label for="email">Email: </label><br>
            <input type="email" id="email" name="email" class="btn"><br>

            <label for="phoneNum">Phone number: </label><br>
            <input type="tel" id="phoneNum" name="phoneNumber" class="btn"><br>

            <button class="submitBtn" type="submit">Submit</button>

        </div>

    </form>
@endsection
