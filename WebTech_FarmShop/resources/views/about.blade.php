<style>
    .grid-container{
        display:grid;
        column-gap: 50px;
        grid-gap: 50px;
        grid-template-columns: auto auto;
        grid-template-rows: auto auto;
        position: relative;
        top: 20px;

    }
    .grid-item{
        font-size: 1.2vw;
        /*align-items: start;*/
        /*margin-top: 50px; */
        border: 3px black solid;
        border-radius: 5px;
        background-color: white;
        width: 1200px;
        height: 300px;


    }



    .grid-picture1{
        background: url({{ asset('images/Cow_female_black_white.jpg') }}) 50% 50% no-repeat;
        background-size: cover;
        width: 300px;
        height: 300px;
        align-items: center;
        border: 3px black solid;
        border-radius: 5px;
    }
    .grid-picture2{
        background: url({{asset('images/depositphotos_7315837-stock-photo-storm-is-coming-on-american.jpg')}}) 50% 50% no-repeat;
        background-size: cover;
        width: 300px;
        height: 300px;
        align-items: center;
        border: 3px black solid;
        border-radius: 5px;
    }

    .grid-picture1:hover, .grid-picture2:hover{
        filter: grayscale(100%);
    }


</style>

@extends('ViewTemplate')

@section('title')
    <title>About page</title>
@endsection

@section('header')
@endsection



@section('main')
    <body>
    <div class="grid-container">
        <div class="grid-picture1"></div>
        <div class="grid-item">
            Step into our online farm shop, where the essence of the countryside meets the savory world of premium meats. Welcome to a haven for carnivores, where each click unveils a selection that's as rich in flavor as it is in tradition.

            Picture a digital marketplace where the finest cuts of meat take center stage—succulent steaks, juicy roasts, and tender chops, all sourced from trusted local farmers who prioritize quality and humane practices. Our e-commerce farm shop is your gateway to a carnivore's paradise, where every meaty desire finds its match.
        </div>
        <div class="grid-picture2"> <img src="{{asset('images/depositphotos_7315837-stock-photo-storm-is-coming-on-american.jpg')}}" alt="xd"></div>
        
        <div class="grid-item">
            Browse through our virtual butcher's block, where each product comes with a story, a journey from pasture to plate. Feel the connection to the land as you explore the variety of cuts, from grass-fed beef to free-range poultry. It's a celebration of craftsmanship and a commitment to bringing the best to your table.

            As you shop with us, you're not just selecting cuts of meat; you're embracing a culinary adventure that respects nature's rhythm. Join us in savoring the excellence of locally sourced, premium meats—all just a click away. Your journey into the world of exceptional flavors begins here. Happy feasting!
        </div>
    </div>
    </body>
@endsection
