@extends('ViewTemplate')


@section('title')
    <title>User</title>
@endsection


@section('header')
    <h1>User</h1>
@endsection


@section('main')
    <div>
        <h2>User Information</h2>
        {{--<p>User Name: {{$users->name}}</p>
        <p>Email: {{$users->email}}</p>
        <p>Phone nr: {{$users->phoneNumber}}</p>--}}
        <h2>Order History</h2>
        <table >
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->quantityBought}}</td>
                    <td>{{$order->totalPrice}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
