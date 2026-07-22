<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Évènements</title>
</head>
<body>
    
    <h2>Créer un évènement</h2>

    <h2 style="margin-bottom: 2rem">
        <a href="{{ route('events.index')}}">Evènements</a> / Créer un évènement
    </h2>

    <form action="{{ route('events.store')}}" method="POST" enctype="multipart/form-data">

        @csrf


        <div style="margin-bottom: 1rem">
            <label for="title">Titre</label>
            <input id="title" name="title" type="text" value="{{old('title')}}"/>
            @error('title')
             <p style="color: red">{{ $message }}</p>   
            @enderror
        </div>

        <div style="margin-bottom: 1rem">
            <label for="description">Description</label>
            <input id="description" name="description" type="text" value="{{old('description')}}"/>
            @error('description')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 1rem">
            <label for="date">Date</label>
            <input id="date" name="date" type="date" value="{{old('date')}}"/>
            @error('date')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 1rem">
            <label for="location">Localisation</label>
            <input id="location" name="location" type="text" value="{{old('location')}}"/>
            @error('location')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 1rem">
            <label for="banner">Bannière</label>
            <input id="banner" name="banner" type="file" accept="image/*"/>
            @error('banner')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Enregistrer</button>


    </form>

</body>
</html>