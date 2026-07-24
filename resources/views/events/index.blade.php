@extends('layouts.app')

@section('content')





<div class="d-flex justify-content-between align-items-center mb-4">

    <h1>
        Liste des évènements
    </h1>

    <a href="{{ route('events.create') }}"
       class="btn btn-primary">

        + Nouvel évènement

    </a>

</div>


<div class="row g-4">

    @forelse($events as $event)

        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                {{-- Image --}}
                @if($event->banner)

                    <img 
                        src="{{ asset('storage/'.$event->banner) }}"
                        class="card-img-top"
                        style="height:220px; object-fit:cover;">

                @else

                    <div 
                        class="bg-secondary text-white d-flex justify-content-center align-items-center"
                        style="height:220px;">

                        Aucune image

                    </div>

                @endif



                <div class="card-body d-flex flex-column">


                    {{-- Titre --}}
                    <h5 class="card-title">
                        {{ $event->title }}
                    </h5>



                    {{-- Description --}}
                    <p class="card-text text-muted">

                        {{ Str::limit($event->description, 100) }}

                    </p>



                    {{-- Informations --}}
                    <p class="mb-1">

                        📍 {{ $event->location }}

                    </p>


                    <p class="mb-3">

                        📅 {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}

                    </p>



                    {{-- Actions --}}
                    <div class="mt-auto d-flex justify-content-center gap-2">

                        <a href="{{ route('events.show',$event) }}"
                           class="btn btn-info btn-sm flex-fill">

                            Voir

                        </a>


                        <a href="{{ route('events.edit',$event) }}"
                           class="btn btn-warning btn-sm flex-fill">

                            Modifier

                        </a>


                        <form
                            action="{{ route('events.destroy',$event) }}"
                            method="POST"
                            class="flex-fill">

                            @csrf
                            @method('DELETE')


                            <button
                                type="button"
                                class="btn btn-danger btn-sm w-100"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $event->id }}">
                                

                                Supprimer

                            </button>

                        </form>
                        <div class="modal fade"
                            id="deleteModal{{ $event->id }}"
                            tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $event->id }}"
                            aria-hidden="true">

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title"
                                            id="deleteModalLabel{{ $event->id }}">

                                            Confirmer la suppression

                                        </h5>

                                        <button type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal">
                                        </button>

                                    </div>

                                    <div class="modal-body">

                                        Êtes-vous sûr de vouloir supprimer
                                        <strong>{{ $event->title }}</strong> ?

                                        <br><br>

                                        Cette action est irréversible.

                                    </div>

                                    <div class="modal-footer">

                                        <button type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal">

                                            Annuler

                                        </button>


                                        <form action="{{ route('events.destroy', $event) }}"
                                            method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">

                                                Oui, supprimer

                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>


    @empty

        <div class="col-12">

            <div class="alert alert-info">

                Aucun événement disponible.

            </div>

        </div>


    @endforelse


</div>


@endsection