<!DOCTYPE html>
<html>

<head>
@include('mywebsite.includes.head')
</head>

<body>

<header>
@include('mywebsite.includes.header')
</header>

<main>
@yield('content')
</main>

<footer>
@include('mywebsite.includes.footer')
</footer>

</body>
</html>