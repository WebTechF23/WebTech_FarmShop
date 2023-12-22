<!-- resources/views/child.blade.php -->

@extends('ViewTemplate')

@section('title')
    <script src="{{asset('js/basketScript.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection


@section('header')
    <h1>Basket</h1>
@endsection


@section('main')
    <div class="basket-main">
        <h1>Reserve your products here!</h1>
        <button id="updateBasketButton" class="updateBasketButton btn btn-primary" onclick="updateBasket()">
            Fetch Basket
        </button>

        <br>
        <form id="basket-form" method="POST" action="{{url('BasketController/finalizePurchase')}}">
            @csrf

            <input type="submit" class="submitToBasketBtn btn btn-primary" value="Submit order">
            <br>
            <br>
        </form>

        @if(session('insufficient_stock'))
            <h3 class="alert alert-danger">
                {{ session(('insufficient_stock')) }}
            </h3>
        @endif
        @if(session('database_updated'))
            <h3 class="alert alert-danger">
                {{ session(('database_updated')) }}
            </h3>
        @endif
        <br>
    </div>

@endsection
