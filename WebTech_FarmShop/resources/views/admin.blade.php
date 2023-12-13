@php use App\Models\Product, App\Models\Order; @endphp
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset("js/adminOptions.js")}}"></script>
@endsection

@section('title')
    <title>Admin</title>
@endsection

@section('main')
    @php
        $products = Product::with(['stocks','pictures'])->get();
    @endphp
   {{-- Needs page for users, order history, products add/delete/edit --}}
    <div class="mrg-r">
        <h2>Add or remove stock</h2>
        @foreach($products as $item)
                <div class="my-1">
                    <div class="boxAdmin">
                {{$item->name}} : {{$item->stocks->quantity}} kg
                    </div>
                    <div class="boxAdmin">
                <button class="adminbtn">Add stock</button>
                <label>
                    <input id="stockAdd" class="admininput" type="number" placeholder="kg">
                </label>
                        <br/>
                <button class="adminbtn">remove</button>
                <label>
                    <input id="stockRemove" class="admininput" type="number" placeholder="kg">
                </label>
                    </div>
                <div class="boxAdmin">
                    <img src="{{asset('images/' . $item->pictures->fileName . $item->pictures->fileExtension)}}" alt="image" width="250" height="250">
                </div>
                </div>
        @endforeach
        @php
        $orders = Order::with(['users, products'])->get();
        @endphp
    </div>
    <div>
        <h2>Orders 123</h2>
        tis
        @foreach($orders as $item)
            <div>
                <div>
                    {{$item->$orders->$id}} : {{$item->$order->$date}} : {{$item->$order->$quantityBought}} : {{$item->$order->$totalPrice}} : {{$item->$order->$uder_id}}
                </div>
            </div>
        @endforeach
        <div>

        </div>
    </div>
@endsection
