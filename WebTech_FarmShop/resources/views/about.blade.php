@extends('ViewTemplate')

@section('title')
    <title>About page</title>
@endsection

@section('main')
    <div class="grid-container" >
        <div class="grid-picture"> <img src="{{asset('images/Cow_female_black_white.jpg')}}" alt="stockPhoto1" width="300" height="300"></div>
        <div class="grid-item">
            Step into our online farm shop, where the essence of the countryside meets the savory world of premium meats. Welcome to a haven for carnivores, where each click unveils a selection that's as rich in flavor as it is in tradition.

            Picture a digital marketplace where the finest cuts of meat take center stage—succulent steaks, juicy roasts, and tender chops, all sourced from trusted local farmers who prioritize quality and humane practices. Our e-commerce farm shop is your gateway to a carnivore's paradise, where every meaty desire finds its match.
        </div>
        <div class="grid-picture"> <img src="{{asset('images/depositphotos_7315837-stock-photo-storm-is-coming-on-american.jpg')}}" alt="stockPhoto2" width="300" height="300"></div>

        <div class="grid-item">
            Browse through our virtual butcher's block, where each product comes with a story, a journey from pasture to plate. Feel the connection to the land as you explore the variety of cuts, from grass-fed beef to free-range poultry. It's a celebration of craftsmanship and a commitment to bringing the best to your table.

            As you shop with us, you're not just selecting cuts of meat; you're embracing a culinary adventure that respects nature's rhythm. Join us in savoring the excellence of locally sourced, premium meats—all just a click away. Your journey into the world of exceptional flavors begins here. Happy feasting!
        </div>
    </div>
@endsection
