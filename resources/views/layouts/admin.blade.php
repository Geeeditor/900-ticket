<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 900 Ticket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
</head>
<body>
    <header>
        This is the header
    </header>

    @yield('content')

    <footer>
        This is the footer
    </footer>
</body>
</html>
