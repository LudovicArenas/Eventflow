@extends('layouts.app')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">
        <h3 class="mb-0">Créer un évènement</h3>
    </div>

    <div class="card-body">

        <form
            action="{{ route('events.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @include('events.partials.form')

        </form>

    </div>

</div>

@endsection