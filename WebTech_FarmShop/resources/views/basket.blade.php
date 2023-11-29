<!-- resources/views/child.blade.php -->

@extends('ViewTemplate')

@section('title')
    <title>Basket</title>
@endsection


@section('header')
    <h1>Basket</h1>
@endsection


@section('main')
    <div>
        <h1>Confirm Your Purchase</h1>
        <div class="basket-main">

            <h3>Your order</h3>
            <p>Roast: 0</p>
            <p>Steaks: 0</p>
            <p>Beef Sausage: 0</p>
            <p>Minced Beef: 0</p>
            <p>Potatoes: 0</p>
            <p>Beef Salami: 0</p>

            <button>
                Confirm Purchase
            </button>



        </div>
    </div>

@endsection
