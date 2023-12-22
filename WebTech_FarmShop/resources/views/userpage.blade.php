@extends('ViewTemplate')

@section('title')
    <title>User page</title>
@endsection


@section('header')
    <h1>User page</h1>
@endsection



@section('main')
    @include("components.userInformation")

    <div class="contentContainer">
    @foreach($orderdata as $item)
        @include("components.orderHistory",[
            'boughtAmount'=>$item->quantityBought,
            'priceTotal'=>$item->totalPrice,
            'OrderID'=>$item->id,
            'orderDate'=>$item->date,
            'productName'=>$item->name])
        <p><p>
    @endforeach
@endsection

