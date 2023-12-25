<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">

{{--    @vite(['resources/css/INSERTCSS','resources/js/JSHERE.js'])--}}
{{--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}

    <script src="{{asset('js/basketScript.js')}}"></script>
    @yield('script')


</head>
<body>


<header class="header">
    @yield("header")
</header>

<nav>
    @include('components.navbar')
</nav>

<main class="main">
    @yield("main")
</main>

<footer>
    @include('components.footer')
</footer>


</body>


</html>
