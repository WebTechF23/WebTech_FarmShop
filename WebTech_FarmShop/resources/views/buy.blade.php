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

            @include("components.product-card", ['productTitle'=>"Roast",'src' => asset('images/roast.png'), 'productInput' => "roast-input", 'productDescription' => "The famous organic roast - you must taste this!"])
            @include("components.product-card", ['productTitle'=>"Steaks",'src' => asset('images/steaks.png'), 'productInput' => "steaks-input", 'productDescription' => "Best steaks in Europe! Voted by local population!"])
            @include("components.product-card", ['productTitle'=>"Beef Sausage",'src' => asset('images/beef_sausages.png'), 'productInput' => "beef-sausage-input", 'productDescription' => "The greatest organic meat, made into sausages!"])
            @include("components.product-card", ['productTitle'=>"Minced Beef",'src' => asset('images/minced_beef.png'), 'productInput' => "minced-beef-input", 'productDescription' => "Fresh, quality ground beef from a local farm, grass fed!"])
            @include("components.product-card", ['productTitle'=>"Potatoes",'src' => asset('images/potatoes.png'), 'productInput' => "potatoes-input", 'productDescription' => "Organic potatoes, grown right here on the farm!"])
            @include("components.product-card", ['productTitle'=>"Beef Salami",'src' => asset('images/beef_salami.png'), 'productInput' => "beef-salami-input", 'productDescription' => "Salami, but made from a cow. Both healthier and tastier!"])

        </div>
    </div>

@endsection
