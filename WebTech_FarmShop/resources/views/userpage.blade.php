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
    @include("components.userInformation")

@endsection

