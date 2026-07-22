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

    @if($event->banner)
        <p>
            Bannière :
            <img
                src="{{ asset('storage/'.$event->banner) }}"
                alt="Bannière de {{ $event->title }}"
                width="150">
        </p>
    @else
        <p>Aucune bannière</p>
    @endif


    <a href="{{ route('events.index') }}">
        Retour aux événements
    </a>

</body>
</html>