<layout>
    <x-slot:title>Evènements</x-slot:title>

    <h2>Liste des évènements</h2>

    <a href="{{ route('events.create') }}">
        Créer un évènement
    </a>

    <ul>
        @foreach($events as $event)
            <li>
                {{ $event->title }}
            </li>
        @endforeach
    </ul>
</layout>