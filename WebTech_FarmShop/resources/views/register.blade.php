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
        <div class="forms-grouping">

            <label for="name">Name: </label><br>
            <input type="text" id="name" name="name"><br>

            <label for="password">Password: </label><br>
            <input type="password" id="password" name="password"><br>

            <label for="email">Email: </label><br>
            <input type="email" id="email" name="email"><br>

            <label for="phoneNum">Phone number: </label><br>
            <input type="tel" id="phoneNum" name="phoneNumber"><br>

            <button class="submitBtn" type="submit">Submit</button>

        </div>

    </form>
@endsection
