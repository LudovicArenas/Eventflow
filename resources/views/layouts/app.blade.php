<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>EventFlow</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-light">

    @include('partials.navbar')

    <div class="container mt-4">

        @include('partials.flash')

        @yield('content')

    </div>

</body>

</html>