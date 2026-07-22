<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Évènements</title>
</head>
<body>
    
    <h1>Liste des évènements</h1>

    <a href="{{ route('events.create') }}">
        Créer un évènement
    </a>


    <table border="1" cellpading="8" style="width:100%;">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Bannière</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($events as $event)

                <tr>

                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->banner }}</td>
                    <td>

                        <a href="{{ route('events.show', $event)}}">
                            <button type="button">
                                Voir
                            </button>
                        </a>

                        <a href="{{ route('events.edit', $event)}}">
                            <button type="button">
                                Modifier
                            </button>
                        </a>

                        <form 
                            action="{{ route('events.destroy', $event)}}"
                            method="POST"
                            style="display: inline"
                        >
                            @csrf
                            @method('DELETE')


                            <button type="submit">
                                Supprimer
                            </button>


                        </form>


                    </td>


                </tr>
                
            @empty
                
                <tr>

                    <td colspan="4">
                        Aucun évènement
                    </td>


                </tr>


            @endforelse


        </tbody>


    </table>


</body>
</html>