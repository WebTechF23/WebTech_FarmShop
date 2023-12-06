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

        </div>
        <div class="grid-picture2"></div>
        <div class="grid-item">

        </div>
    </div>
    </body>
@endsection
