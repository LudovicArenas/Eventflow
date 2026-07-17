<layout>
    <x-slot:title>Créer un évènement</x-slot:title>

    <h2 style="margin-bottom: 2rem">
        <a href="{{ route('events.index')}}">Evènements</a> / Créer un évènement
    </h2>
    <form action="{{ route('events.store')}}" method="POST">
        @csrf
        <div style="margin-bottom: 1rem">
            <label for="title">Titre</label>
            <input id="title" name="title" type="text" :value="{{old('title')}}"/>
        </div>
        <div style="margin-bottom: 1rem">
            <label for="description">Description</label>
            <input id="description" name="description" type="text" :value="{{old('description')}}"/>
        </div>
        <div style="margin-bottom: 1rem">
            <label for="date">Date</label>
            <input id="date" name="date" type="date" :value="{{old('date')}}"/>
        </div>
        <div style="margin-bottom: 1rem">
            <label for="location">Localisation</label>
            <input id="location" name="location" type="text" :value="{{old('location')}}"/>
        </div>
        <div style="margin-bottom: 1rem">
            <label for="banner">Bannière</label>
            <input id="banner" name="banner" type="text" :value="{{old('banner')}}"/>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
</layout>