<!DOCTYPE html>
<html>
<head>
    <title>Modifier événement</title>
</head>

<body>

    <h1>Modifier {{ $event->title }}</h1>


    <form action="{{ route('events.update', $event) }}" method="POST">
        
        @csrf
        @method('PUT')


        <label>Titre</label>
        <input type="text" name="title" value="{{ old('title', $event->title) }}">


        <label>Description</label>
        <input type="text" name="description" value="{{ old('description', $event->description) }}">


        <label>Date</label>
        <input type="date" name="date" value="{{ old('date', $event->date) }}">


        <label>Localisation</label>
        <input type="text" name="location" value="{{ old('location', $event->location) }}">


        <label>Bannière</label>
        <input type="text" name="banner" value="{{ old('banner', $event->banner) }}">

        <button type="submit">
            Modifier
        </button>


    </form>


</body>
</html>