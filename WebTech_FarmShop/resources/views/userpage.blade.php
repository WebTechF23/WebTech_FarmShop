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

        <p>{{session()->get('phoneNumber')}}</p>
        {{session()->}}
        @if(session()->has('name'))
            <p>Value from session: {{ session('name') }}</p>
        @else
            <p>No value found in the session for the specified key.</p>
        @endif

    </div>
@endsection

