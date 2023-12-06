<style>
    .grid-container{
        display:grid;
        column-gap: 50px;
        grid-gap: 50px;
        grid-template-columns: auto auto;
        grid-template-rows: auto auto;
        position: relative;

    }
    .grid-item{
        font-size: 1.2vw;
        /*align-items: start;*/
        /*margin-top: 50px; */
        border: 3px black solid;
        border-radius: 5px;
        background-color: white;

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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
        </div>
        <div class="grid-picture2"></div>
        <div class="grid-item">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
        </div>
    </div>
    </body>
@endsection
