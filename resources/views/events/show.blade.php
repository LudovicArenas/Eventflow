<!DOCTYPE html>
<html>
<head>
    <title>{{ $event->title }}</title>
</head>

<body>

    <h1>{{ $event->title }}</h1>

    <p>
        Description :
        {{ $event->description }}
    </p>

    <p>
        Date :
        {{ $event->date }}
    </p>

    <p>
        Localisation :
        {{ $event->location }}
    </p>

    <p>
        Bannière :
        {{ $event->banner }}
    </p>


    <a href="{{ route('events.index') }}">
        Retour aux événements
    </a>

</body>
</html>