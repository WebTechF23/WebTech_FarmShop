<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <script src="{{asset('js/popUp.js')}}"></script>
    <script src="{{asset('js/scriptbuy.js')}}"></script>

</head>
<body>


<nav>
    @include('components.navbar')
</nav>

<main class="main">

    @yield("main")

    @include('components.popUp_contact')
</main>

<footer>
    @include('components.footer')
</footer>

</body>

</html>
