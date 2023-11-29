<div class="navbar">
    <img class="logo" src="{{asset('images/FarmShop-logos_white.png')}}" alt="logo">
    <nav class="bar">
        <ul class="nav_links">
            <li><a href="/">Home</a></li>
            @if(auth()->check())
                <li><a href="/user">User</a></li>
                <li><a href="/buy">Buy</a></li>
                <li><a href="/basket">Basket</a></li>
                <li><a href="/logout"></a>Logout</li>
                @if(auth()-> user()->isAdmin())
                    <li><a href="/admin">Admin</a></li>
                @endif
            @else()
                <li><a href="/login">Login</a></li>
            @endif
        </ul>
    </nav>
</div>


