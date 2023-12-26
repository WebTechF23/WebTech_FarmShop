<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

@extends('ViewTemplate')

@section('title')
    <title>User page</title>
@endsection


@section('header')
    <h1>User page</h1>
@endsection



@section('main')
    <div class="d-flex flex-column">
    <h1>User page</h1>

    <h3>Order view</h3>
{{--    @include("components.userInformation")--}}
{{--    <p>User ID : {{$user->user_id}}</p>--}}

    <div class="user_container" style="top: 0; left: 0; position: relative; transform: translate(0%,0%); height: 250px; width: 200px;">
        <p>Name : {{$user->name}}</p>
        <p>Email : {{$user->email}}</p>
        <p>Phone number : {{$user->phoneNumber}}</p>
    </div>
        <br>
        <br>


    <div class="container-lg mt-5">
        <table class="table-bordered table-dark">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Product name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Price</th>
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
    </div>

    </div>





@endsection

