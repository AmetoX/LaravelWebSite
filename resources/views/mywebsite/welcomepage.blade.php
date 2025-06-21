<!DOCTYPE html>
<html>

<head>
<title>@yield('page_title', 'Default Title')</title>
<!-- Common CSS/JS files go here -->
</head>

<body>
<header>@yield('header_content')</header>

<main>

@yield('main_content')

</main>

<footer>
    @yield('footer_content', 'Default footer text')

</footer>

</body>
</html>