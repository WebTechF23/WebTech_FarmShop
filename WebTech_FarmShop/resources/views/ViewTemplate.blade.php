<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TesterSite</title>
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">

    <script src="------"></script>

</head>
<body>
@section('header')
<header>
    <h1 id="title">Music Library</h1>
    @show
</header>
<div class="flex-div">
    @section('navBar')
    <nav>
        <h2>Menu Header</h2>
        @show
    </nav>
    @section('section')
    <section id="maindiv">


        @show
    </section>

</div>



<footer>
    <ul>
        <li>Contact: 23422324</li>

    </ul>
</footer>


</body>


</html>
