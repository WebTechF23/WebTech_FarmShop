@extends('ViewTemplate')

@section('title')
    <title>User page</title>
@endsection


@section('header')
    <h1>User page</h1>
@endsection



@section('main')
    <h1>User page</h1>

    <h3>Order view</h3>
    @include("components.userInformation")

    <div class="orderContainer">
        <table border="1">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orderdata as $order)
                <tr>
                    <td>Order ID: {{ $order->id }}</td>
                    <td>User ID: {{ $order->user_id }}</td>
                    <td colspan="5"></td>

                    @foreach ($data as $product)
                        @if ($product['order_id'] == $order->id)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ucfirst(str_replace('_',' ',$product['name'] ))}}</td>
                                <td>{{ $product['unitPrice'] }}</td>
                                <td>{{ $product['quantityBought'] }}</td>
                                <td>{{$product['price']}}</td>
                                <td>{{$product['totalPrice']}}</td>
                            </tr>

                            @endif
                        @endforeach

                </tr>
                        @endforeach
            </tbody>
        </table>

        <br>
        <br>





@endsection

