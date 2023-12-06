@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset('js/cookieManager.js')}}"></script>
@endsection


@section('title')
    <title>Basket</title>
@endsection


@section('header')
    <h1>User</h1>
@endsection


@section('main')
    <div>
        <h1>Buy Local Organic Products</h1>

        <div class="buy-main">

            @foreach($data as $item)
                @include("components.product-card", ['productTitle'=>$item->name,'src' => asset('images/' . $item->pictures->fileName . $item->pictures->fileExtension), 'productInput' => "roast-input", 'productDescription' => "The famous organic roast - you must taste this!"])
            @endforeach


        </div>
    </div>

@endsection
