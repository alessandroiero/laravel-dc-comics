<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud Comics</title>
       @vite('resources/js/app.js')
</head>
<body class="container">
    <header>
        <h1>@yield('page.title')</h1>
    </header>
    <main class="container">
        @yield('page.main')
    </main>
    <footer></footer>
</body>
</html>