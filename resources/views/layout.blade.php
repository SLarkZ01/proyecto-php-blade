<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- presentado por Thomas Montoya Magon --}}
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>Este es el header de la aplicacion</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Pie de pagina o foooter de la pagina</p>
    </footer>
</body>

</html>