{{-- event edit view with title, description, date, start_time, end_time, location--}}
@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
  {{-- edit event form --}}
  <div class="container-fluid px-4">
    <h1 class="mt-4">Modifier un événement</h1>
    {{-- display success message if event is updated --}}
    @if (session()->has('event-updated'))
    <div class="alert alert-success" role="alert">
      {{ session()->get('event-updated') }}
    </div>
    @endif
    {{-- create form --}}
    <form action="{{ route('events.update', $event->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">
      </div>
      <div class="mb-3">
        <label for="start_time" class="form-label">Heure de début</label>
        <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $event->start_time }}">
      </div>
      <div class="mb-3">
        <label for="end_time" class="form-label">Heure de fin</label>
        <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $event->end_time }}">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Lieu</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
  </div>
</main>

@endsection
