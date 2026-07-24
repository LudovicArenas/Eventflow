@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        Modifier un évènement
    </div>

    <div class="card-body">

        <form
            action="{{ route('events.update',$event) }}"
            method="POST"
            enctype="multipart/form-data">

            @method('PUT')

            @include('events.partials.form')

        </form>

    </div>

</div>

@endsection