@extends('layouts.app')

@section('content')


<div class="container">


    <div class="card shadow">


        {{-- Image --}}
        @if($event->banner)

            <div class="bg-dark text-center p-3">

                <img
                    src="{{ asset('storage/'.$event->banner) }}"
                    class="img-fluid rounded"
                    style="max-height:500px;">

            </div>

        @endif



        <div class="card-body">


            <h1 class="card-title mb-3">
                {{ $event->title }}
            </h1>



            <div class="mb-3">

                <p class="mb-1">
                    📅 
                    {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}
                </p>


                <p>
                    📍 
                    {{ $event->location }}
                </p>

            </div>



            <hr>



            <h5>
                Description
            </h5>


            <p class="text-muted">

                {{ $event->description }}

            </p>



            <div class="mt-4">


                <a href="{{ route('events.edit',$event) }}"
                   class="btn btn-warning">

                    Modifier

                </a>



                <a href="{{ route('events.index') }}"
                   class="btn btn-secondary">

                    Retour

                </a>


            </div>


        </div>


    </div>


</div>


@endsection