<div class="navbar">
    <img class="logo" src="{{asset('images/FarmShop-logos_white.png')}}" alt="logo">
    <nav class="bar">
        <ul class="nav_links">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('userpage')}}">User</a></li>
            <li><a href="{{route('buy')}}">Buy</a></li>
            <li><a href="{{route('basket')}}">Basket</a></li>
            <li><a href="{{route('home')}}">Logout</a></li>
            @if(auth()->check())
{{--                <li><a href="/user">User</a></li>--}}
{{--                <li><a href="/buy">Buy</a></li>--}}
{{--                <li><a href="/basket">Basket</a></li>--}}
{{--                <li><a href="/logout"></a>Logout</li>--}}
                @if(auth()-> user())
                    <li><a href="/admin">Admin</a></li>
                @endif
            @else()
                <li><a href="{{route('loginPage')}}">Login</a></li>
            @endif
        </ul>
    </nav>
</div>

