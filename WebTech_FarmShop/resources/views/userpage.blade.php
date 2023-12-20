@extends('ViewTemplate')

@section('title')
    <title>User page</title>
@endsection


@section('header')
    <h1>User page</h1>
@endsection



@section('main')
    <div>
        <ul>
            <li>My Details</li>
            <li>My Orders</li>
            <li></li>
        </ul>
    </div>

    <div class="contentContainer">

        <textarea disabled></textarea>
        <label for="fnameID">First name</label>
        <input type="text" id="fnameID">

        <label for="lnameID">Last name</label>
        <input type="text" id="lnameID">

        <label for="emailID">Email </label>
        <input type="email" id="emailID">

        @foreach($userdata as $user)
            @include("components.userInformation", ['name'=>$user->users->name,
            'email'=>$user->users->email,
            'phoneNumber'=>$user->users->phoneNumber])
        @endforeach


    </div>
@endsection

