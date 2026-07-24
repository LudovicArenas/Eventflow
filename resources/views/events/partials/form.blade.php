@csrf

<div class="mb-3">
    <label class="form-label">Titre</label>

    <input
        type="text"
        name="title"
        class="form-control"
        value="{{ old('title', $event->title ?? '') }}">

    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>

    <textarea
        name="description"
        class="form-control">{{ old('description', $event->description ?? '') }}</textarea>

    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Date</label>

    <input
        type="date"
        name="date"
        class="form-control"
        value="{{ old('date', $event->date ?? '') }}">

    @error('date')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Lieu</label>

    <input
        type="text"
        name="location"
        class="form-control"
        value="{{ old('location', $event->location ?? '') }}">

    @error('location')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Bannière</label>

    <input
        type="file"
        name="banner"
        class="form-control">

    @error('banner')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    @isset($event)
        @if($event->banner)
            <img
                src="{{ asset('storage/'.$event->banner) }}"
                class="img-thumbnail mt-3"
                style="max-width:250px;">
        @endif
    @endisset
</div>

<button class="btn btn-primary">
    Enregistrer
</button>