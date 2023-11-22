<div class="navbar">
    {{--    <img class="logo" src="https://images.pexels.com/photos/458991/pexels-photo-458991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="logo">--}}
    <img class="logo" src="{{asset('images/FarmShop-logos_white.png')}}" alt="logo">
    <nav class="bar">
        <ul class="nav_links">
            <li><a href="/">Home</a></li>
{{--            @if(auth()->check())--}}
{{--                @if(auth()-> user()->isAdmin())--}}
{{--                    <a href="/admin">Admin</a>--}}
{{--                @elseif(auth()->user()->isUser())--}}
{{--                    <a href="/user">User</a>--}}
{{--                @else()--}}
{{--                    <a href="/login">Login</a>--}}
{{--                @endif--}}
{{--            @endif--}}

            <li><a href="/login">Login</a></li>

            <li><a href="/buy">Buy</a></li>
            <li><a href="/basket">Basket</a></li>
        </ul>
    </nav>
</div>


